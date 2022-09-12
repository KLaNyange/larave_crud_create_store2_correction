<form action="/store" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name">
    <select name="gender" id="">
        <option value="Woman">Woman</option>
        <option value="Man">Man</option>
    </select>
    <label for="">Email</label>
    <input type="mail" name="mail">
    <label for="">Age</label>
    <input type="number" name="age">
    <button type="submit">Save</button>
</form>

