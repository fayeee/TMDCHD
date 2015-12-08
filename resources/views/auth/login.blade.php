 @extends('template.logintemplate')
 @section('content')


<div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>TMDC</strong> HelpDesk</h1>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Please log in to continue.</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">

                               @if(count($errors) > 0)
                        <div class="alert alert-danger" roler="alert">
                            @foreach ($errors->all() as $error)
                            {{$error}}<br>
                            @endforeach
                        </div>
                        @endif
                        <form role="form"  method="POST" class="login-form" action="{{ url('/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" name="submit" class="btn"  href="/index.html">Sign in!</button>

			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
@stop