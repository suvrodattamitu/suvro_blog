@extends('main')

@section('title','Contact')

@section('content')       
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me<h1>
                <hr>

                <form action = "{{ url('contact') }}" method = "POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        
                        <input id="email" name="email" class="form-control" placeholder="Email" />
                    </div>

                    <div class="form-group">
                        
                        <input id="subject" name="subject" class="form-control" placeholder="Subject"/>
                    </div>

                     <div class="form-group">
                      
                        <textarea id="message" name="message" class="form-control" placeholder="Type your message.."></textarea>
                    </div>

                    <input type="submit" value="send message" class="btn btn-success" />

                </form>

            </div>
        </div>
@endsection