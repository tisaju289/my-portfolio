 <header class="relative z-[99]">
      <div class="container mx-auto pt-[30px]">
        <div
          class="flex justify-between rounded-[10px] bg-card px-[15px] py-[30px] md:px-[30px]"
        >
          <div class="logo flex items-center">
            <a href="/">
              <img
                src="assets/images/logo2.png"
                alt="Lariv - React Portfolio Template" style="width: 150px; height:50px"
              />
            </a>
          </div>
          <menu class="hidden items-center lg:flex">
            <ul class="flex gap-[40px]">
              <li>
                <a href="/" class="navActive">Home</a>
              </li>
              <li>
                <a href="{{ url('aboutPage')}}" class="navNotActive">About Me</a>
              </li>
              <li>
                <a href="{{ url('portfolioPage')}}" class="navNotActive">Portfolio</a>
              </li>
              <li>
                <a href="{{ url('servicesPage')}}" class="navNotActive">Service</a>
              </li>
             
              <li>
                <a href="{{ url('contactPage')}}" class="navNotActive">Contact</a>
              </li>
            </ul>
          </menu>
          <div class="block lg:hidden">
            <div class="flex items-center gap-4 px-[10px]">
              <span
                class="sidebar-open rounded-full border border-[#919295] flex justify-center items-center w-[50px] h-[50px]"
              >
                <i class="fa-light fa-bars-sort text-text text-[22px]"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </header>