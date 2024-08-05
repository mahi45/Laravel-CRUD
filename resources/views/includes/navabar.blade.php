 {{-- Navbar Starts --}}
 <div class="w-2/3 m-auto mt-4 navbar bg-base-100">
    <div class="flex-1">
      <a class="text-xl font-bold">Laravel CRUD</a>
    </div>

    <div class="hidden navbar-center lg:flex">
        <ul class="px-1 menu menu-horizontal">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('category.index') }}">Category</a></li>
          <li><a href="{{ route('subcategory.index') }}">Subcategory</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          {{-- <li>
            <details>
              <summary>Parent</summary>
              <ul class="p-2">
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
              </ul>
            </details>
          </li> --}}

        </ul>
      </div>
    <div class="flex-none gap-2">
      <div class="form-control">
        <input type="text" placeholder="Search" class="w-24 input input-bordered md:w-auto" />
      </div>
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img
              alt="Tailwind CSS Navbar component"
              src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
          </div>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
          <li>
            <a class="justify-between">
              Profile
              <span class="badge">New</span>
            </a>
          </li>
          <li><a>Settings</a></li>
          <li><a>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
{{-- Navbar Ends --}}
