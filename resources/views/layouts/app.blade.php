<!doctype html>
<html lang="en">
  <head>
    <x-partials.head :title="$title ?? ' ' " />
    @livewireStyles
</head>
<body>
    <x-partials.nav/>

            {{$slot}}

    @livewireScripts
    <x-partials.footer/>
</body>
</html>
