<!DOCTYPE html>
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
               <div class="md:sticky w-20 h-20 rounded-full bg-[#8892B0] p-1 m-1 group hover:bg-[#64FFDA] fixed bottom-6 right-4 align-middle">
                  <a href="https://www.linkedin.com/in/ciprian-pop-9a5169157/" target="_blank">
                     <!-- Default avatar -->
                     <img src="./images/avatar.png" alt="avatar" class="rounded-full bg-[#0A192F] block group-hover:hidden duration-300">
                     <!-- Hover avatar -->
                     <img src="./images/avatar2.png" alt="avatar hover" class="rounded-full bg-[#0A192F] hidden group-hover:block duration-300">
                  </a>
                  <!-- Tooltip -->
                  <span class="absolute left-1/2 -translate-x-1/2 -bottom-10 bg-gray-800 text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition duration-300">
                  Visit My LinkedIn
                  </span>
               </div>
               </div>
               <div class="flex items-center">
                  <a href="https://github.com/c-v-pop" class="py-5 px-10 font-bold text-[#64FFDA]/50 hover:text-[#64FFDA]">GitHub Page</a>
                  <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail"
                     class="mx-4 md:py-5 md:px-10 font-bold text-[#64FFDA]/50 hover:text-[#64FFDA]">Get in touch</a>
                  <a href="media/C_V_Pop.pdf"
                     class="py-5 px-10 border-[#CCD6F6] border-4 hover:text-[#64FFDA] hover:border-[#64FFDA] hover:shadow-xl hover:shadow-[#64FFDA] font-bold text-[#64FFDA]/50"
                     download="C_V_Pop.pdf">Resume</a>
               </div>
            </nav>
            <div class="wrapper md:py-40 md:mt-8 mt-10">
               <div class="text-center">
                  <h1 class="md:py-8 text-md md:text-2xl font-serif text-gray-200 mx-10">
                     Hi, I'm <span class="text-[#64FFDA] font-extrabold">Ciprian Pop</span>, a 
                     <span class="text-accent font-bold">Web Developer</span> who builds fast, clean websites.
                  </h1>
               </div>

               <p class="text-lg mt-[2em] md:text-2xl m-auto text-center md:py-8 max-w-[80%] text-gray-200">
                  I work with <span class="font-bold text-[#64FFDA]">Laravel</span>, 
                  <span class="font-bold text-[#64FFDA]">Blade</span>, 
                  <span class="font-bold text-[#64FFDA]">TailwindCSS</span>, 
                  <span class="font-bold text-[#64FFDA]">PHP</span>, and 
                  <span class="font-bold text-[#64FFDA]">MySQL</span> to build sites that are 
                  <span class="font-bold text-[#CCD6F6]">user-friendly</span> and 
                  <span class="font-bold text-[#CCD6F6]">visually sharp</span>. 
                  I focus on simplicity, usability, and performance — without overcomplicating things.
               </p>

               <div class="flex flex-col md:flex-row justify-center items-center my-8" style="gap: 3rem;">
                  <a href="#frontend"
                     class="text-center text-[#64FFDA]/50 border-2 border-[#64FFDA]/50 bg-transparent p-2 md:p-6  rounded-md text-2xl hover:text-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] font-bold w-auto">
                  Frontend Projects
                  </a>
                  <a href="#fullstack"
                     class="text-center text-[#64FFDA]/50 border-2 border-[#64FFDA]/50 bg-transparent p-2 md:p-6 rounded-md text-2xl hover:text-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] font-bold w-auto">
                  Fullstack Projects
                  </a>
               </div>
            </div>
         </header>
         <h2 class="text-center capitalize font-mono font-extrabold text-4xl text-[#64FFDA] mt-6" id="frontend">Frontend Development</h2>
         <div class="flex flex-col md:flex-row py-4 gap-6 frontend md:flex-wrap">
            <a href="https://vorbacusufletul.wordpress.com/" class="space-x-3.5 m-[2em] bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
               <div class="flex flex-col">
                  <h3 class="text-center text-2xl font-bold text-gray-200 mb-4">Vorba cu Sufletul</h3>
                  <img src="./images/soul.jpg" alt="Monk pouring water from plate" class="sm mb-4 w-[100%] h-[22em] rounded-3xl object-cover">
               </div>
               <div class="flex flex-col space-y-4 bg-[#0A192F] p-6 rounded-lg shadow-md h-full">
                  <!-- Project description -->
                  <div class="text-md text-left text-gray-200 leading-relaxed">
                     <p>
                        <span class="text-[#64FFDA] font-bold">Vorba cu Sufletul</span> was my first  
                        <span class="text-[#64FFDA] font-bold">paid WordPress project</span>, where I built  
                        a website for a <span class="font-bold">family constellation practitioner</span>  
                        according to their specific requirements.
                     </p>
                     <p class="mt-2">
                        This project introduced me to <span class="font-bold">WordPress</span>, allowing me to explore its  
                        <span class="font-bold text-[#64FFDA]">templates, premium themes, and widgets</span>  
                        to create a visually appealing and functional site.
                     </p>
                     <p class="mt-2">
                        I also applied <span class="font-bold text-[#64FFDA]">SEO techniques</span> to improve visibility  
                        and drive traffic, giving me a solid foundation in customization and user engagement.
                     </p>
                  </div>
                  <!-- Technologies Used -->
                  <div>
                     <h3 class="text-[#64FFDA] text-sm font-semibold uppercase tracking-wide mb-2">Technologies Used</h3>
                     <ul class="grid grid-cols-2 gap-x-6 gap-y-2 text-sm text-gray-300 list-disc list-inside">
                        <li>WordPress</li>
                        <li>HTML & CSS</li>
                        <li>Bootstrap</li>
                        <li>Responsive Design</li>
                        <li>SEO Basics</li>
                     </ul>
                  </div>
               </div>
            </a>
            <a href="https://c-v-pop.github.io/Reservia/" class="space-x-3.5 m-[2em] bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
               <div class="flex flex-col">
                  <h3 class="text-center text-2xl font-bold text-gray-200 mb-4">Reservia</h3>
                  <img src="./images/reservia.webp" alt="Bunk beds image" class="sm mb-4 w-[100%] h-[22em] rounded-3xl object-cover">
               </div>
               <div class="flex flex-col space-y-4 bg-[#0A192F] p-6 rounded-lg shadow-md">
                  <!-- Project description -->
                  <div class="text-md text-left text-gray-200 leading-relaxed">
                     <p>
                        <span class="text-[#64FFDA] font-bold">Reservia</span> is a project I built during a  
                        <span class="text-[#64FFDA] font-bold">Bootcamp</span>, where I turned  
                        <span class="underline font-bold">mockups into code</span> using  
                        <span class="italic font-bold">HTML, CSS, and GitHub</span>.
                     </p>
                     <p class="mt-2">
                        This was also my <span class="text-[#64FFDA] font-bold">introduction to Visual Studio Code</span>  
                        and my first dive into <span class="text-[#64FFDA] font-bold">responsive design</span>.
                     </p>
                     <p class="mt-2">
                        The challenge was to build a <span class="text-[#64FFDA] font-bold">fully responsive</span> website  
                        that adapts perfectly to <span class="text-[#64FFDA] font-bold">any device</span>, ensuring a smooth  
                        user experience whether on <span class="font-bold">desktop, tablet, or mobile</span>.
                     </p>
                     <p class="mt-2">
                        I really enjoyed experimenting with layouts, fine-tuning styles, and making sure everything  
                        looked just right across screen sizes. This project strengthened my understanding of  
                        <span class="underline font-bold">mobile-first design</span> and helped me apply  
                        <span class="italic font-bold">front-end development</span> best practices.
                     </p>
                  </div>
                  <!-- Technologies Used -->
                  <div>
                     <h3 class="text-[#64FFDA] text-sm font-semibold uppercase tracking-wide mb-2">Technologies Used</h3>
                     <ul class="grid grid-cols-2 gap-x-6 gap-y-2 text-sm text-gray-300 list-disc list-inside">
                        <li>HTML5 (Semantic)</li>
                        <li>CSS</li>
                        <li>SCSS</li>
                        <li>Responsive Design</li>
                        <li>Git & GitHub</li>
                        <li>Visual Studio Code</li>
                     </ul>
                  </div>
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
         <p class="text-center mb-4 text-gray-200">These projects are also available on my GitHub account</p>
         <div class="flex flex-col md:flex-row py-4 gap-6 fullstack">
            <a href="https://laalexiaatelier.co.uk/" class="space-x-3.5 m-[2em] bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
               <div class="flex flex-col">
                  <h3 class="text-center text-2xl font-bold text-gray-200 mb-4">LaAlexia Beauty Salon</h3>
                  <img src="./images/alexia.webp" alt="Alexia website logo" class="sm mb-4 w-[100%] h-[22em] rounded-3xl object-cover">
               </div>
               <div class="flex flex-col space-y-4 bg-[#0A192F] p-6 rounded-lg shadow-md">
                  <!-- Project description -->
                  <div class="text-md text-left text-gray-200 leading-relaxed">
                     <p>
                        I <span class="font-bold text-[#64FFDA]">fully built a website</span> for a top beauty salon in my town,  
                        <span class="font-bold text-[#64FFDA]">LaAlexia Beauty Salon</span>, from scratch.
                     </p>
                     <p class="mt-2">
                        I managed <span class="font-bold text-[#64FFDA]">hosting & deployment</span> using  
                        <span class="font-bold text-[#64FFDA]">GoDaddy</span> for the domain and  
                        <span class="font-bold text-[#64FFDA]">Ploi.io</span> for server configuration and deployment.
                     </p>
                     <p class="mt-2">
                        The site includes an integrated <span class="font-bold text-[#64FFDA]">Booksy</span> appointment booking system and  
                        was developed with <span class="font-bold text-[#64FFDA]">Laravel, TailwindCSS, and JavaScript</span>.  
                        I also applied <span class="font-bold text-[#64FFDA]">SEO optimizations</span> to boost local search visibility.
                     </p>
                  </div>
                  <!-- Technologies Used -->
                  <div>
                     <h3 class="text-[#64FFDA] text-sm font-semibold uppercase tracking-wide mb-2">Technologies Used</h3>
                     <ul class="grid grid-cols-2 gap-x-6 gap-y-2 text-sm text-gray-300 list-disc list-inside">
                        <li>Laravel</li>
                        <li>PHP</li>
                        <li>Blade Templating</li>
                        <li>TailwindCSS</li>
                        <li>JavaScript</li>
                        <li>Visual Studio Code</li>
                        <li>GoDaddy (Domain)</li>
                        <li>Ploi.io (Deployment)</li>
                        <li>Herd (Local Dev Server)</li>
                        <li>SEO Optimization</li>
                     </ul>
                  </div>
               </div>
            </a>
            <a href="https://github.com/c-v-pop/to-do-list" class="space-x-3.5 m-[2em] bg-[#112240] flex flex-col flex-1 border-2 border-[#64FFDA] hover:shadow-[0_0_10px_3px_#64FFDA] rounded-md p-4">
               <div class="flex flex-col">
                  <h3 class="text-center text-2xl font-bold text-gray-200 mb-4">Laravel To-Do List</h3>
                  <img src="./images/dolist.jpg" alt="To-Do list notebook" class="sm mb-4 w-[100%] h-[22em] rounded-3xl object-cover">
               </div>
               <div class="flex flex-col space-y-4 bg-[#0A192F] p-6 rounded-lg shadow-md h-full">
                  <!-- Project description -->
                  <div class="text-md text-left text-gray-200 leading-relaxed">
                     <p>
                        This <span class="font-bold text-[#64FFDA]">Laravel To-Do List</span> project was part of a  
                        <span class="font-bold text-[#64FFDA]">technical test</span>.
                     </p>
                     <p class="mt-2">
                        It was built using <span class="font-bold text-[#64FFDA]">Laravel</span>, <span class="font-bold text-[#64FFDA]">MySQL</span>,  
                        and <span class="font-bold text-[#64FFDA]">Tailwind CSS</span>.
                     </p>
                     <p class="mt-2">
                        The app follows the <span class="font-bold text-[#64FFDA]">MVC architecture</span>, ensuring scalability and efficient task management.  
                        The backend logic is powered by <span class="font-bold text-[#64FFDA]">PHP</span>, while the responsive UI delivers a smooth user experience.
                     </p>
                  </div>
                  <!-- Technologies Used -->
                  <div>
                     <h3 class="text-[#64FFDA] text-sm font-semibold uppercase tracking-wide mb-2">Technologies Used</h3>
                     <ul class="grid grid-cols-2 gap-x-6 gap-y-2 text-sm text-gray-300 list-disc list-inside">
                        <li>Laravel</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>TailwindCSS</li>
                        <li>MVC Architecture</li>
                        <li>Responsive Design</li>
                        <li>Visual Studio Code</li>
                     </ul>
                  </div>
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
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-200">Website Packages Offers</h2>
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
                     <p class="text-2xl font-bold mb-2 text-gray-200">£150</p>
                     <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail">
                     <button class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition hover:cursor-pointer">Contact Me</button>
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
                     <p class="text-2xl font-bold mb-2 text-gray-200">£300</p>
                     <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail">
                     <button class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition hover:cursor-pointer">Contact Me</button>
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
                     <p class="text-2xl font-bold mb-2 text-gray-200">£450</p>
                     <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail">
                     <button class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition hover:cursor-pointer">Contact Me</button>
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
            <p class="text-center m-auto mt-10 text-gray-200">&copy; 2025 Ciprian Pop. All rights reserved.</p>
         </footer>
      </body>
   </html>