<?php

namespace App\Models;



class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yusuf Satria Borneo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, architecto tenetur, quas vel sunt labore veritatis assumenda corrupti, ipsa aut obcaecati delectus explicabo nihil non! Porro, quis vero enim ea consequatur id quisquam numquam neque nobis sed. Quas quo odit tempore rerum molestias deserunt consequatur tempora voluptatum sed atque quos eligendi vitae suscipit adipisci dolore possimus ad, temporibus fuga recusandae esse ipsam distinctio? Maxime nam debitis facere placeat officia laborum, distinctio, rerum tenetur labore similique cumque quidem doloribus, sed rem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Satria Borneo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, sunt tenetur. Corporis, dignissimos. Minima voluptatibus deleniti quas cupiditate, reiciendis sint maiores quam obcaecati repellat mollitia voluptates atque officia veritatis error! Autem tenetur sapiente, suscipit repellendus aliquid impedit similique eius ipsam quo molestias facere, itaque sunt unde nemo nisi velit, ullam quaerat. Eius dignissimos quisquam molestiae architecto optio quam, et eligendi nulla temporibus reprehenderit ipsum! Est totam neque voluptate nulla id veritatis, laborum aut sed doloribus. Rerum, doloremque fugiat esse tempora dignissimos veniam voluptatibus rem sed repudiandae similique ad numquam quas nulla impedit aperiam perspiciatis corporis cupiditate error aliquid itaque earum! Mollitia officia vero accusantium incidunt fugiat voluptas, debitis beatae eligendi repudiandae ullam labore officiis omnis neque nulla ea eaque harum sunt nesciunt laboriosam perspiciatis nemo? Optio, perferendis! Sapiente ut aut eos, ducimus labore fugiat voluptate. Minus quae quidem iure beatae in consectetur velit perferendis nulla ratione corrupti dolor similique blanditiis doloribus vel natus rerum soluta id, architecto sunt! Nemo ducimus omnis nesciunt itaque sint hic minus repellendus magnam distinctio. Cumque aspernatur sit quia officiis facilis, voluptatum assumenda asperiores id! Perspiciatis atque molestiae cum, voluptatibus pariatur facilis quam voluptates quidem placeat eum nihil, deserunt suscipit quo aperiam veritatis? Officia, facilis possimus."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
