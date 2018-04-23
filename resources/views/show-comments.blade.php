<table border = 1>
    <tr>
        <td>ID</td>
        <td>Text</td>
    </tr>
    @foreach ($comments as $comment)
    <tr>
        <td>{{ $comment->CommentId }}</td>
        <td>{{ $comment->CommentText }}</td>
    </tr>
    @endforeach
</table>