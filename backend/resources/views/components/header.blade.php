<header class="header"
  @scroll.window="scroll()"
  :class="{ 'header--sticky':sticky }"
  x-data="header">
  <div class="c-container header__container ">
    <a class="header__logo-link"
      href="/">
      <img src="/images/logo.svg"
        class="header__logo"
        alt="{{ config('app.name') }}"
        title="{{ config('app.name') }}">
      <span class="header__logo-slogan ">типография</span>
    </a>
    <div class="flex items-start ml-20 space-x-2">
      <svg class="fill-black w-5 h-5">
        <use xlink:href="#phone"></use>
      </svg>
      <div class="flex flex-col">
        <a class="tr flex items-center space-x-2"
          href="tel:{{ config('app.phone') }}">
          <span class="text-[20px] font-semibold text-black/70 leading-none ">{{ config('app.phone') }}</span>
        </a>
        <span class="text-black/60 text-[14px]">круглосуточно</span>
      </div>
    </div>
    <div class="flex items-start ml-20 space-x-2">
      <svg class="fill-black w-5 h-5">
        <use xlink:href="#email"></use>
      </svg>
      <div class="flex flex-col">
        <a class="tr flex items-center space-x-2"
          href="mailto:{{ config('app.email') }}">
          <span class="text-[18px] font-semibold text-black/70 leading-none">{{ config('app.email') }}</span>
        </a>
        <span class="text-black/60 text-[14px]">почта для заказов</span>
      </div>
    </div>
    <div class="flex items-center ml-8 space-x-2">
      <svg class="w-6 h-6">
        <use xlink:href="#map"></use>
      </svg>
      <span class="text-[16px] text-black/70">Санкт-Петербург, <br> {{ config('app.address') }}</span>
    </div>

    <button class="btn ml-8">
      Online калькулятор
    </button>
  </div>
  <div
    x-data="{ menu: false }"
    class="bg-gray-50 relative flex-col py-4 mt-4 border-t border-b border-gray-100">
    <div class="c-container flex items-center divide-x divide-gray-300">
      <div class="flex pr-8">
        <button
          @click.prevent="menu = !menu"
          class="flex items-center space-x-4">
          <x-icon name="menu" class="fill-primary w-6 h-6" />
          <span class="tr text-[16px] text-black/80 hover:text-primary font-semibold leading-none ">Услуги</span>
        </button>
      </div>
      <nav>
        <ul class="flex ml-8 space-x-6">
          <li class="tr group">
            <a class="tr text-black/80 group-hover:text-primary font-semibold" href="/">Главная</a>
          </li>
          <li
            x-data="{ open:false }"
            class=" tr relative flex items-center space-x-1">
            <a
              @scroll.window="open = false"
              @click.prevent.self="open = !open"
              class="tr text-black/80 hover:text-primary font-semibold" href="#">Информация</a>
            <x-icon name="dropdown" class="tr fill-primary w-3 h-3" />
            <ul
                x-cloak
                x-show="open"
                x-transition:enter="transition ease-in-out duration-300"
                x-transition:enter-start="translate-y-2 opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"
                x-transition:leave="transition ease-in-out duration-300"
                x-transition:leave-start="translate-y-0 opacity-100"
                x-transition:leave-end="translate-y-2 opacity-0"
                @click.away="open = false"
                class="top-full absolute left-0 p-8 bg-gray-100">
                <li class="tr group {$classnames}">
                  <a class="tr group-hover:text-primary" href="{$link}">О типографии</a>
                </li>
            </ul>
          </li>
          <li class="tr group ">
            <a class="tr text-black/80 group-hover:text-primary font-semibold" href="/techtrebovania">Тех.требования</a>
          </li>
          <li class="tr group ">
            <a class="tr text-black/80 group-hover:text-primary font-semibold" href="/contacts">Контакты</a>
          </li>
        </ul>
      </nav>
    </div>
    <div
      x-cloak
      x-show="menu"
      x-transition:enter="transition ease-in-out duration-300"
      x-transition:enter-start="translate-y-2 opacity-0"
      x-transition:enter-end="translate-y-0 opacity-100"
      x-transition:leave="transition ease-in-out duration-300"
      x-transition:leave-start="translate-y-0 opacity-100"
      x-transition:leave-end="translate-y-2 opacity-0"
      @click.away="menu = false"
      class="top-full absolute left-0 w-full mt-[1px]">
      <div class="c-container">
        <div class="bg-gray-50 p-8">
          {'!pdoMenu' | snippet : [
            'parents' => 105,
            'level' => 3,
            'depth' => 3,
            'tplOuter' => '@INLINE <ul class="flex space-x-6">{$wrapper}</ul>',
            'tplInner' => '@INLINE <ul class="p-4">{$wrapper}</ul>'
            'tpl' => '@INLINE
              <li class="tr group {$classnames}">
                <a class="tr group-hover:text-primary" href="{$link}">{$menutitle}</a>
              </li>'
            'tplParentRow' => '@INLINE
              <li
                class="tr flex flex-col">
                <a class="tr font-semibold text-[16px] text-black/60" href="#">{$menutitle}</a>
                {$wrapper}
              </li>'

            'tplInnerRow' => '@INLINE
              <li class="{$classnames}">
                <a class="hover:text-primary tr text-[16px]" href="{$link}">{$menutitle}</a>
              </li>',

          ]}
        </div>
      </div>
    </div>
  </div>
</header>
