<form {{ $attributes }} method="POST">
@csrf
@method('PUT')
    {{ $slot }}
</form>
