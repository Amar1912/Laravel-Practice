@include('common.header')
<h1>About Us</h1>

<!-- <h1>{{ $name }}</h1> -->
<!-- <h1>{{ rand() }}</h1> -->

<div>
    <form method="POST" action="/adduser">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>