<form {{ $attributes }} id="toggleform" method="POST">
@csrf
@method('PUT')
    {{ $slot }}
</form>
