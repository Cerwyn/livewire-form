<div 
    x-data="{open: false}"
    x-on:notify.window="open = true; message = event.detail; setTimeout(() => {open = false}, 2500)"
    x-show="open"
    x-transition:enter="transform ease-out duration-500 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    style="display: none;"
    class="alert alert-primary" 
    role="alert">
      <p x-text="message"></p>
</div>