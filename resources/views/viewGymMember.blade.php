<html>
    <head>
        <title>View Member</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
            <center>
            <a class="btn btn-success" href="{{route('addmember')}}">Add Member</a>
            </center>
            <?php $gymModel = new \App\Models\add_member_model();
                $members = $gymModel::all();
            ?>
            @foreach($members as $member)
            @component('components.tablerow')
                @slot('id', $member->getId())
                @slot('firstName', $member->getFirstName())
                @slot('lastName', $member->getLastName())
                @slot('birthdate', $member->getBirthdate())
                @slot('expireDate', $member->getExpireDate())
                @slot('edit')
                    <form method="POST" action="{{route('editMember',$member->getId())}}">
                        @method('POST')
                        @csrf
                        <button class="btn btn-danger">Edit</button>
                    </form>
                @endslot
                @slot('delete')
                    <form onsubmit="return confirm('Are your sure to delete {{$member->getFirstName()}}');"
                          method="POST" action="{{route('deleteMember',$member->getId())}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">DELETE</button>
                    </form>
                @endslot
            @endcomponent
            @endforeach
    </body>
</html>
