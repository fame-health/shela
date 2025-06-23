<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get home page data
        $homePage = Page::home()->published()->first();

        // Get featured posts (limit 6)
        $featuredPosts = Post::with(['user', 'category'])
            ->published()
            ->featured()
            ->orderBy('published_at', 'desc')
            ->limit(6)
            ->get();

        // Get latest posts (limit 8)
        $latestPosts = Post::with(['user', 'category'])
            ->published()
            ->orderBy('published_at', 'desc')
            ->limit(8)
            ->get();

        // Get active categories with post count
        $categories = Category::active()
            ->withCount(['posts' => function ($query) {
                $query->published();
            }])
            ->orderBy('sort_order')
            ->limit(6)
            ->get();

        // Get featured services (limit 6)
        $featuredServices = Service::active()
            ->featured()
            ->orderBy('sort_order')
            ->limit(6)
            ->get();

        // Get all active services for services section
        $services = Service::active()
            ->orderBy('sort_order')
            ->get();

        // Get featured testimonials (limit 6)
        $testimonials = Testimonial::active()
            ->featured()
            ->orderBy('sort_order')
            ->limit(6)
            ->get();

        // Get active team members (limit 4)
        $teamMembers = Team::active()
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        // Get active galleries for hero/banner section (limit 10)
        $galleries = Gallery::active()
            ->orderBy('sort_order')
            ->limit(10)
            ->get();

        // Get website settings
        $settings = [
            'site_name' => Setting::get('site_name', 'My Website'),
            'site_description' => Setting::get('site_description', ''),
            'site_logo' => Setting::get('site_logo', ''),
            'hero_title' => Setting::get('hero_title', 'Welcome to Our Website'),
            'hero_subtitle' => Setting::get('hero_subtitle', ''),
            'hero_image' => Setting::get('hero_image', ''),
            'about_title' => Setting::get('about_title', 'About Us'),
            'about_description' => Setting::get('about_description', ''),
            'services_title' => Setting::get('services_title', 'Our Services'),
            'services_description' => Setting::get('services_description', ''),
            'testimonials_title' => Setting::get('testimonials_title', 'What Our Clients Say'),
            'testimonials_description' => Setting::get('testimonials_description', ''),
            'team_title' => Setting::get('team_title', 'Our Team'),
            'team_description' => Setting::get('team_description', ''),
            'blog_title' => Setting::get('blog_title', 'Latest News & Articles'),
            'blog_description' => Setting::get('blog_description', ''),
            'contact_phone' => Setting::get('contact_phone', ''),
            'contact_email' => Setting::get('contact_email', ''),
            'contact_address' => Setting::get('contact_address', ''),
        ];

        // SEO Meta tags
        $metaTitle = $homePage ? $homePage->meta_title : $settings['site_name'];
        $metaDescription = $homePage ? $homePage->meta_description : $settings['site_description'];
        $metaKeywords = $homePage ? $homePage->meta_keywords : '';

        return view('home.index', compact(
            'homePage',
            'featuredPosts',
            'latestPosts',
            'categories',
            'featuredServices',
            'services',
            'testimonials',
            'teamMembers',
            'galleries',
            'settings',
            'metaTitle',
            'metaDescription',
            'metaKeywords'
        ));
    }

    /**
     * Get posts by category for AJAX requests
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPostsByCategory(Request $request)
    {
        $categoryId = $request->get('category_id');
        $limit = $request->get('limit', 6);

        $query = Post::with(['user', 'category'])
            ->published()
            ->orderBy('published_at', 'desc');

        if ($categoryId && $categoryId !== 'all') {
            $query->where('category_id', $categoryId);
        }

        $posts = $query->limit($limit)->get();

        return response()->json([
            'success' => true,
            'data' => $posts->map(function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'excerpt' => $post->excerpt,
                    'featured_image' => $post->featured_image,
                    'published_at' => $post->published_at->format('M d, Y'),
                    'reading_time' => $post->reading_time,
                    'user' => [
                        'name' => $post->user->name,
                        'avatar' => $post->user->avatar,
                    ],
                    'category' => [
                        'name' => $post->category->name,
                        'slug' => $post->category->slug,
                        'color' => $post->category->color,
                    ]
                ];
            })
        ]);
    }

    /**
     * Search posts for AJAX requests
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchPosts(Request $request)
    {
        $query = $request->get('q');
        $limit = $request->get('limit', 10);

        if (!$query) {
            return response()->json([
                'success' => false,
                'message' => 'Search query is required'
            ]);
        }

        $posts = Post::with(['user', 'category'])
            ->published()
            ->where(function ($q) use ($query) {
                $q->where('title', 'LIKE', "%{$query}%")
                  ->orWhere('excerpt', 'LIKE', "%{$query}%")
                  ->orWhere('content', 'LIKE', "%{$query}%");
            })
            ->orderBy('published_at', 'desc')
            ->limit($limit)
            ->get();

        return response()->json([
            'success' => true,
            'data' => $posts->map(function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'excerpt' => $post->excerpt,
                    'featured_image' => $post->featured_image,
                    'published_at' => $post->published_at->format('M d, Y'),
                    'user' => [
                        'name' => $post->user->name,
                    ],
                    'category' => [
                        'name' => $post->category->name,
                        'slug' => $post->category->slug,
                    ]
                ];
            }),
            'total' => $posts->count()
        ]);
    }

    /**
     * Get more galleries for AJAX pagination
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMoreGalleries(Request $request)
    {
        $page = $request->get('page', 1);
        $limit = $request->get('limit', 12);
        $category = $request->get('category');

        $query = Gallery::active()->orderBy('sort_order');

        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }

        $galleries = $query->skip(($page - 1) * $limit)
            ->take($limit)
            ->get();

        return response()->json([
            'success' => true,
            'data' => $galleries->map(function ($gallery) {
                return [
                    'id' => $gallery->id,
                    'title' => $gallery->title,
                    'description' => $gallery->description,
                    'image' => $gallery->image,
                    'alt_text' => $gallery->alt_text,
                    'category' => $gallery->category,
                ];
            }),
            'has_more' => $galleries->count() === $limit
        ]);
    }

    /**
     * Increment post views
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function incrementPostViews(Request $request)
    {
        $postId = $request->get('post_id');

        if (!$postId) {
            return response()->json([
                'success' => false,
                'message' => 'Post ID is required'
            ]);
        }

        $post = Post::find($postId);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Post not found'
            ]);
        }

        $post->increment('views_count');

        return response()->json([
            'success' => true,
            'views_count' => $post->fresh()->views_count
        ]);
    }

    /**
     * Display blog page
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function blog(Request $request)
    {
        $perPage = 12;
        $search = $request->get('search');
        $categorySlug = $request->get('category');

        $query = Post::with(['user', 'category'])
            ->published()
            ->orderBy('published_at', 'desc');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('excerpt', 'LIKE', "%{$search}%");
            });
        }

        if ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        $posts = $query->paginate($perPage);
        $categories = Category::active()->withCount('posts')->get();
        $featuredPosts = Post::with(['user', 'category'])->published()->featured()->limit(5)->get();

        return view('blog.index', compact('posts', 'categories', 'featuredPosts', 'search', 'categorySlug'));
    }

    /**
     * Display blog by category
     *
     * @param Category $category
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function blogByCategory(Category $category, Request $request)
    {
        $perPage = 12;

        $posts = Post::with(['user', 'category'])
            ->published()
            ->where('category_id', $category->id)
            ->orderBy('published_at', 'desc')
            ->paginate($perPage);

        $categories = Category::active()->withCount('posts')->get();
        $featuredPosts = Post::with(['user', 'category'])->published()->featured()->limit(5)->get();

        return view('blog.category', compact('posts', 'categories', 'featuredPosts', 'category'));
    }

    /**
     * Display blog detail
     *
     * @param Post $post
     * @return \Illuminate\View\View
     */
    public function blogDetail(Post $post)
    {
        if ($post->status !== 'published') {
            abort(404);
        }

        // Increment views
        $post->increment('views_count');

        // Get related posts
        $relatedPosts = Post::with(['user', 'category'])
            ->published()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->limit(4)
            ->get();

        // Get post galleries
        $galleries = $post->galleries()->active()->orderBy('sort_order')->get();

        return view('blog.show', compact('post', 'relatedPosts', 'galleries'));
    }

    /**
     * Display services page
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        $services = Service::active()->orderBy('sort_order')->get();
        $featuredServices = Service::active()->featured()->orderBy('sort_order')->get();

        return view('services.index', compact('services', 'featuredServices'));
    }

    /**
     * Display service detail
     *
     * @param Service $service
     * @return \Illuminate\View\View
     */
    public function serviceDetail(Service $service)
    {
        if (!$service->is_active) {
            abort(404);
        }

        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->limit(3)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }

    /**
     * Display gallery page
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function gallery(Request $request)
    {
        $category = $request->get('category');
        $perPage = 20;

        $query = Gallery::active()->orderBy('sort_order');

        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }

        $galleries = $query->paginate($perPage);
        $categories = Gallery::active()->select('category')->distinct()->pluck('category');

        return view('gallery.index', compact('galleries', 'categories', 'category'));
    }

    /**
     * Display about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $teamMembers = Team::active()->orderBy('sort_order')->get();
        $testimonials = Testimonial::active()->featured()->limit(6)->get();

        $settings = [
            'about_title' => Setting::get('about_title', 'About Us'),
            'about_content' => Setting::get('about_content', ''),
            'mission_title' => Setting::get('mission_title', 'Our Mission'),
            'mission_content' => Setting::get('mission_content', ''),
            'vision_title' => Setting::get('vision_title', 'Our Vision'),
            'vision_content' => Setting::get('vision_content', ''),
        ];

        return view('about.index', compact('teamMembers', 'testimonials', 'settings'));
    }

    /**
     * Display team page
     *
     * @return \Illuminate\View\View
     */
    public function team()
    {
        $teamMembers = Team::active()->orderBy('sort_order')->get();

        return view('team.index', compact('teamMembers'));
    }

    /**
     * Display contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $settings = [
            'contact_title' => Setting::get('contact_title', 'Contact Us'),
            'contact_description' => Setting::get('contact_description', ''),
            'contact_phone' => Setting::get('contact_phone', ''),
            'contact_email' => Setting::get('contact_email', ''),
            'contact_address' => Setting::get('contact_address', ''),
            'contact_map' => Setting::get('contact_map', ''),
            'office_hours' => Setting::get('office_hours', ''),
        ];

        return view('contact.index', compact('settings'));
    }

    /**
     * Store contact form submission
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->status = 'unread';
        $contact->ip_address = $request->ip();
        $contact->user_agent = $request->userAgent();
        $contact->save();

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    /**
     * Display dynamic page
     *
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function page(Page $page)
    {
        if ($page->status !== 'published') {
            abort(404);
        }

        return view('pages.show', compact('page'));
    }
}
