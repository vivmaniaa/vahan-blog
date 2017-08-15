@extends('main')
@section('title', 'Contact')
@section('stylesheet')
    <link rel="stylesheet" href="bingo.css">
@endsection
@section('content')
   <h2>Contact</h2>
    <form action="">
        <div class="form-group">
            <label for="">Email:</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Subject:</label>
            <input type="text" name="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Message:</label>
            <textarea name="message" id="contact-message" cols="30" rows="3" class="form-control">Type your message herer...</textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Send Message">
        </div>
    </form>
@endsection

