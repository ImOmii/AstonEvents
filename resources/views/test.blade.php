<html>
<body>
    amir is new
    @foreach ($events as $event)
        <p>This is a fevent name {{ $event->name }}</p>
    @endforeach
</body>
</html>