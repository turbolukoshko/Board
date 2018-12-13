<form action="{{ route('categories.destroy', $category->id) }}" method="post"
      style="display: none">
    @csrf
    @method('DELETE')
</form>

<script>
    $(document).ready(function () {
        let links = $('.delete-link');
        links.each(function(index, el) {
            let element = $(el);
            element.on('click', function(event) {
                event.preventDefault();
                element.next().submit();
            });
        });
    });
</script>