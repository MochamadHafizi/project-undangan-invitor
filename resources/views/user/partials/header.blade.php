<!-- Header -->
    <header
      class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
    >
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#home" class="font-bold text-xl text-primary block py-6"
              ><img src="img/logo.png" width="60" alt="">Invitor</a
            >
          </div>
          <div class="flex items-center px-4">
            <button
              id="hamburger"
              name="hamburger"
              type="button"
              class="block absolute right-4 lg:hidden"
            >
              <span
                class="hamburger-line transition duration-300 ease-in-out origin-top-left"
              ></span>
              <span
                class="hamburger-line transition duration-300 ease-in-out"
              ></span>
              <span
                class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"
              ></span>
            </button>
            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="{{ route('home') }}"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Beranda</a
                  >
                </li>
                <li class="group">
                  <a
                    href="undangan"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Buat Undangan</a
                  >
                </li>
                <li class="group">
                  <a
                    href="{{ route('scan') }}"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Scanner</a
                  >
                </li>
                {{-- <li class="group">
                  <a
                    href="#blog"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Blog</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#contact"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Contact</a
                  >
                </li> --}}
                <div class="dropdown inline-block relative">
                <button class="text-base text-dark py-2 mx-8 flex group-hover:text-primary inline-flex items-center">
                  <span class="mr-1">{{ Auth::user()->name }}</span>
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                </button>
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                  <li class=""><a class="bg-white hover:bg-gray-400 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                </ul>
              </div>
              </ul>
              
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->
    