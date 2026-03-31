<?php

$files = glob("c:/Users/User/Herd/go.green.school/resources/views/*.blade.php");

foreach ($files as $file) {
    if (!is_file($file)) continue;
    $content = file_get_contents($file);
    
    // Fix navigation
    $content = str_replace(
        "About</a>`n                            <a", 
        "About</a>\n                            <a", 
        $content
    );
    
    // For Kalkulator and Contact which have double replaced strings:
    // "About</a>`n                            <a ... href=\"/program\" ... >Program</a>`n                            <a ... href=\"/program\" ... >Program</a>"
    // Let's use a regex to clean multiple Program links.
    
    $content = preg_replace(
        '/(<a[^>]*href="\/program"[^>]*>Program<\/a>.*?){2,}/',
        '<a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/program" data-i18n="nav_program">Program</a>',
        $content
    );

    // Fix Footer
    $content = str_replace(
        "About</a></li>`n                                <li>", 
        "About</a></li>\n                                <li>", 
        $content
    );

    // Fix translations
    $content = str_replace(
        "About\",`n            nav_program", 
        "About\",\n            nav_program", 
        $content
    );
    
    $content = str_replace(
        "Tentang\",`n            nav_program", 
        "Tentang\",\n            nav_program", 
        $content
    );
    
    // Clean weird `r`n literal if any
    $content = str_replace("`n", "\n", $content);
    $content = str_replace("`r", "\r", $content);

    file_put_contents($file, $content);
    echo "Fixed: $file\n";
}
