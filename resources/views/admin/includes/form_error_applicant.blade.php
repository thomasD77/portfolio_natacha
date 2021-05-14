@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            <h4 class="text-center">
                WATCH OUT! Please try again... <br> The Form is not complete:
            </h4>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
