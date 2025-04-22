<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Car Dealership</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-BI34LZWszE2uyKy6Fgq+F4eHHTVkk5AyZ+zGgAQk0DmsXjX9bQ1PwCDMZC6XlM9PJKgpKxK9EJeyA4byHvKyvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-image {
            height: calc(100vh - 200px);
            object-fit: cover;
            width: 100%;
        }
        @media (max-width: 1024px) {
            .hero-image {
                height: calc(100vh - 250px);
            }
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex flex-col">

@yield("content")


<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

</script>
</body>
</html>
