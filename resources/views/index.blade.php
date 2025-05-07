<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Ciprian Pop's Portfolio</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
    
        <!-- Tailwind & Custom Styles -->
        <link href="dist/output.css" rel="stylesheet">
        <link href="/styles/index.css" rel="stylesheet">
    
        <!-- Vite (Laravel Hot Reload or Production Assets) -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    
        <!-- Optional JS -->
        <script src="/demo/index.js" defer></script>
    </head>
    
    <html lang="en" class="scroll-smooth">
        <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="preconnect" href="https://fonts.googleapis.com">
           <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
           <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
           <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
           <script src="/demo/index.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
           <link href="dist/output.css" rel="stylesheet">
           <link href="/styles/index.css" rel="stylesheet">
           <title>Ciprian Pop's Portfolio</title>
        </head>
        <body class="bg-[#0A192F]" id="nav">
            <header>
               <nav
                  class="flex flex-wrap justify-between container m-auto text-sm md:text-lg py-2 my-3 md:sticky md:top-0 bg-[#0A192F]">
                  <div class="relative w-20 h-20 rounded-full bg-[#8892B0] p-1 m-1 hover:bg-[#64FFDA] avatar group">
                      <a href="https://www.linkedin.com/in/ciprian-pop-9a5169157/">
                          <img src="./images/avatar.PNG" alt="avatar" class="rounded-full bg-[#0A192F]">
                      </a>
                      <!-- Tooltip -->
                      <span class="absolute left-1/2 -translate-x-1/2 -bottom-10 bg-gray-800 text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition duration-300">
                          Visit My LinkedIn
                      </span>
                  </div>
                  
                  <div class="flex items-center">
                     <a href="https://github.com/c-v-pop" class="py-5 px-10 font-bold text-[#64FFDA]/50 hover:text-[#64FFDA]">GitHub Page</a>
                     <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail"
                        class="mx-4 md:py-5 md:px-10 font-bold text-[#64FFDA]/50 hover:text-[#64FFDA]">Get in touch</a>
                     <a href="media/C_V_Pop.pdf"
                        class="py-5 px-10 border-[#CCD6F6] border-4 hover:border-[#64FFDA] hover:shadow-xl hover:shadow-[#64FFDA] font-bold text-[#64FFDA]/50"
                        download="C_V_Pop.pdf">Resume</a>
                  </div>
               </nav>
               <div class="wrapper md:py-40 md:mt-8 mt-10">
                  <div class="typing-demo text-center">
                     <h1 class="md:py-8 text-[0.45em] md:text-2xl font-serif">Hello there! I'm
                        <span class="text-[#64FFDA] font-extrabold">Ciprian Pop</span>,
                        and I'm a <span class="text-accent font-bold">Web Developer</span>
                     </h1>
                  </div>
                  <p class="text-lg mt-[2em] md:text-2xl m-auto text-center md:py-8 max-w-[60%]">I am a <span class="font-bold text-accent">professional web developer</span> with a passion for creating <span class="font-bold text-[#CCD6F6]">user-friendly</span> and <span class="font-bold text-[#CCD6F6]">visually appealing</span> websites. With expertise in <span class="font-bold text-[#64FFDA]">HTML</span>, <span class="font-bold text-[#64FFDA]">CSS</span>, <span class="font-bold text-[#64FFDA]">JavaScript</span>, and various <span class="font-bold text-accent">web development frameworks</span>, I bring a wealth of technical skills to every project. My goal is to <span class="font-bold text-[#CCD6F6]">design</span> and <span class="font-bold text-[#CCD6F6]">develop websites</span> that meet the unique needs of each client and enhance their <span class="font-bold text-[#64FFDA]">online presence</span>.
                  </p>
                  <div class="flex flex-col md:flex-row justify-center items-center my-8" style="gap: 3rem;">
                     <a href="#frontend"
                        class="text-center text-[#64FFDA]/50 border-2 border-[#64FFDA]/50 bg-transparent p-4 md:p-6 rounded-md text-2xl hover:shadow-[0_0_10px_3px_#64FFDA] font-bold w-full md:w-auto">
                     Frontend Projects
                     </a>
                     <a href="#fullstack"
                        class="text-center text-[#64FFDA]/50 border-2 border-[#64FFDA]/50 bg-transparent p-4 md:p-6 rounded-md text-2xl hover:shadow-[0_0_10px_3px_#64FFDA] font-bold w-full md:w-auto">
                     Fullstack Projects
                     </a>
                  </div>
               </div>
            </header>
            
            <h2 class="text-center capitalize font-mono font-extrabold text-4xl text-[#64FFDA]" id="frontend">Frontend Development</h2>
            <div class="flex flex-col md:flex-row py-4 gap-6 frontend md:flex-wrap">
      
              <a href="https://vorbacusufletul.wordpress.com/" class="space-x-3.5 bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
                  <div class="flex flex-col">
                      <h3 class="text-center text-2xl font-bold">Vorba cu Sufletul</h3>
                      <img src="./images/soul.jpg" alt="Monk pouring water from plate" class="sm p-5 rounded-lg">
                  </div>
                  <div class="flex flex-col md:mt-10">
                      <p class="text-md text-left">
                          <span class="text-[#64FFDA] font-bold">Vorba cu Sufletul</span> was my first  
                          <span class="text-[#64FFDA] font-bold">paid WordPress project</span>, where I built  
                          a website for a <span class="font-bold">family constellation practitioner</span>  
                          according to their specific requirements.  
                          This project was also my introduction to <span class="font-bold">WordPress</span>,  
                          allowing me to explore its <span class="font-bold text-[#64FFDA]">templates, premium themes,  
                          and widgets</span> to craft a visually appealing and functional site.  
                          Additionally, I implemented <span class="font-bold text-[#64FFDA]">SEO techniques</span>  
                          to enhance search engine visibility and drive relevant traffic.  
                          This experience gave me a strong foundation in WordPress development,  
                          customization, and optimizing websites for better user engagement.  
                      </p>
                  </div>
              </a>
              
              <a href="https://c-v-pop.github.io/Reservia/" class="space-x-3.5 bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
                  <div class="flex flex-col">
                      <h3 class="text-center text-2xl font-bold">Reservia</h3>
                      <img src="./images/reservia.webp" alt="Bunk beds image" class="sm p-5 rounded-lg">
                  </div>
                  <div class="flex flex-col md:mt-10">
                      <p class="text-md text-left">
                          <span class="text-[#64FFDA] font-bold">Reservia</span> is a project I built during a 
                          <span class="text-[#64FFDA] font-bold">Bootcamp</span>, where I turned 
                          <span class="underline font-bold">mockups into code</span> using 
                          <span class="italic font-bold">HTML, CSS, and GitHub</span>.  
                          This was also my <span class="text-[#64FFDA] font-bold">introduction to Visual Studio Code</span> 
                          and my first dive into <span class="text-[#64FFDA] font-bold">responsive design</span>.  
                          The challenge was to create a <span class="text-[#64FFDA] font-bold">fully responsive</span> website 
                          that adapts perfectly to <span class="text-[#64FFDA] font-bold">any device</span>, ensuring a smooth 
                          user experience whether on <span class="font-bold">desktop, tablet, or mobile</span>.  
                          I had a lot of fun experimenting with layouts, fine-tuning styles, and making sure everything looked just right across different screen sizes.  
                          This project really solidified my understanding of <span class="underline font-bold">mobile-first design</span> 
                          and gave me hands-on experience with <span class="italic font-bold">front-end development</span> best practices.
                      </p>
                  </div>
              </a>
      
            </div>
            <div class="flex mt-6">
              <a href="#fullstack"
                 class="text-center animate-bounce my-8 md:my-4 text-[#64FFDA] border-2 border-[#64FFDA] bg-transparent mb-[2.5em] md:p-4 p-6 rounded-md m-auto text-2xl hover:shadow-[0_0_10px_3px_#64FFDA] font-bold">
              <i class="fas fa-arrow-down"></i>
              </a>
           </div>
            <h2 class="text-center capitalize font-mono font-extrabold text-4xl text-[#64FFDA] mt-16" id="fullstack">Fullstack Projects</h2>
            <p class="text-center mb-4">These projects are also available on my GitHub account</p>
            <div class="flex flex-col md:flex-row py-4 gap-6 fullstack">
            
                <a href="https://laalexiaatelier.co.uk/" class="space-x-3.5 bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
                    <div class="flex flex-col">
                        <h3 class="text-center text-2xl font-bold">LaAlexia Beauty Salon</h3>
                        <img src="./images/alexia.webp" alt="Alexia website logo" class="sm p-5 rounded-lg">
                    </div>
                    <div class="flex flex-col md:mt-10">
                        <p class="text-lg text-left">
                            I <span class="font-bold text-[#64FFDA]">fully built a website</span> for a top beauty salon in my town, 
                            <span class="font-bold text-[#64FFDA]">LaAlexia Beauty Salon</span>, from scratch.  
                            I handled <span class="font-bold text-[#64FFDA]">hosting & deployment</span> via <span class="font-bold text-[#64FFDA]">GoDaddy</span> and <span class="font-bold text-[#64FFDA]">Ploi.io</span>.  
                            The site features an integrated <span class="font-bold text-[#64FFDA]">Booksy</span> appointment system and was built using  
                            <span class="font-bold text-[#64FFDA]">Laravel, TailwindCSS, and JavaScript</span>, with <span class="font-bold text-[#64FFDA]">SEO optimizations</span> applied for visibility.
                        </p>
                    </div>
                </a>
            
                <a href="https://github.com/c-v-pop/to-do-list" class="space-x-3.5 bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
                    <div class="flex flex-col">
                        <h3 class="text-center text-2xl font-bold">Laravel To-Do List</h3>
                        <img src="./images/dolist.jpg" alt="To-Do list notebook" class="sm p-5 rounded-lg">
                    </div>
                    <div class="flex flex-col md:mt-10">
                        <p class="text-lg text-left">
                            This <span class="font-bold text-[#64FFDA]">Laravel To-Do List</span> project was part of a <span class="font-bold text-[#64FFDA]">technical test</span>.  
                            It was built with <span class="font-bold text-[#64FFDA]">Laravel</span>, <span class="font-bold text-[#64FFDA]">MySQL</span>, and <span class="font-bold text-[#64FFDA]">Tailwind CSS</span>.  
                            The app follows the <span class="font-bold text-[#64FFDA]">MVC architecture</span>, ensuring scalability and efficient task management.  
                            The backend logic is powered by <span class="font-bold text-[#64FFDA]">PHP</span>, while the responsive UI provides a smooth experience.
                        </p>
                    </div>
                </a>
            </div>
            <div class="flex mt-6">
              <a href="#offers"
                 class="text-center animate-bounce my-8 md:my-4 text-[#64FFDA] border-2 border-[#64FFDA] bg-transparent mb-[2.5em] md:p-4 p-6 rounded-md m-auto text-2xl hover:shadow-[0_0_10px_3px_#64FFDA] font-bold">
              <i class="fas fa-arrow-down"></i>
              </a>
           </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12" id="offers">
              <h2 class="text-3xl font-bold text-center mb-8">Website Packages Offers</h2>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
                <!-- Starter Plan -->
                <div class="bg-[#112240] shadow-md rounded-2xl p-6 flex flex-col justify-between">
                  <div>
                    <h3 class="text-xl font-semibold mb-2 text-white">Starter</h3>
                    <p class="text-[#64FFDA] mb-4">Great for portfolios or simple landing pages.</p>
                    <ul class="space-y-2 text-sm text-white">
                      <li>✅ One-page responsive design</li>
                      <li>✅ Contact form</li>
                      <li>✅ Basic SEO setup</li>
                      <li>✅ 1 revision</li>
                      <li>🚫 No admin panel or blog</li>
                    </ul>
                  </div>
                  <div class="mt-6">
                    <p class="text-2xl font-bold mb-2">£150</p>
                    <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail">
                      <button class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition">Contact Me</button>
                      </a>
                  </div>
                </div>
            
                <!-- Business Plan -->
                <div class="bg-[#112240] shadow-md rounded-2xl p-6 flex flex-col justify-between border-blue-500">
                  <div>
                    <h3 class="text-xl font-semibold mb-2 text-white">Business</h3>
                    <p class="text-[#64FFDA] mb-4">Ideal for service-based small businesses.</p>
                    <ul class="space-y-2 text-sm text-white">
                      <li>✅ Up to 5 pages (Home, About, Services, Contact, etc.)</li>
                      <li>✅ Contact form with spam protection</li>
                      <li>✅ Mobile responsive</li>
                      <li>✅ Basic SEO & Google Maps</li>
                      <li>✅ 2 revisions</li>
                    </ul>
                  </div>
                  <div class="mt-6">
                    <p class="text-2xl font-bold mb-2">£300</p>
                    <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail">
                    <button class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition">Contact Me</button>
                    </a>
                  </div>
                </div>
            
                <!-- Pro Plan -->
                <div class="bg-[#112240] shadow-md rounded-2xl p-6 flex flex-col justify-between">
                  <div>
                    <h3 class="text-xl font-semibold mb-2 text-white">Pro</h3>
                    <p class="text-[#64FFDA] mb-4">For growing businesses that need content control.</p>
                    <ul class="space-y-2 text-sm text-white">
                      <li>✅ Everything in Business</li>
                      <li>✅ Gallery or Blog section</li>
                      <li>✅ Basic admin panel (CRUD)</li>
                      <li>✅ Up to 8 pages total</li>
                      <li>✅ 3 revisions</li>
                    </ul>
                  </div>
                  <div class="mt-6">
                    <p class="text-2xl font-bold mb-2">£450</p>
                    <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail">
                      <button class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition">Contact Me</button>
                      </a>
                  </div>
                </div>
            
              </div>
            </div>
            
            
            <footer>
               <div class="flex mt-16">
                  <a href="#nav"
                     class="text-center animate-bounce my-8 md:my-4 text-[#64FFDA] border-2 border-[#64FFDA] bg-transparent mb-[2.5em] md:p-4 p-6 rounded-md m-auto text-2xl hover:shadow-[0_0_10px_3px_#64FFDA] font-bold">
                  <i class="fas fa-arrow-up"></i>
                  </a>
               </div>
               
               <p class="text-center m-auto mt-10">&copy; 2025 Ciprian Pop. All rights reserved.</p>
            </footer>
         </body>
</html>
