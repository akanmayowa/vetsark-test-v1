<table class="table table-bordered">
    <tr>
        <th>User_id</th>
        <th>title</th>
        <th>Description</th>
    </tr>
    @foreach ($list as $list)
    <tr>
        <td>{{ user_id }}</td>
        <td>{{ title }}</td>
        <td>{{ description }}</td>
        <tr>

    </tr>
    @endforeach
</table>
