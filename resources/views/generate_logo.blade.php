@extends('layouts.main')

@section('content')
  <script>
    window.filename = '{{$filename}}'
  </script>

  <div class="fill-container">
    <div class="template-container">

      <div class="container">
        <div class="holder">
          <div class="box"></div>
        </div>
        <div class="holder">
          <div class="box"></div>
        </div>
        <div class="holder">
          <div class="box"></div>
        </div>
      </div>

      <div class="status-container">
        <h1 id='statusText'>Generating Your Logo</h1>
        <p>
            This may take a minute so please be patient!
            <br>
            You will be redirected to the next page when the process is complete!
        </p>
        <p class="alert alert-danger hidden">This is taking longer than usual - <a href='/'>you should just try again.</a></p>
        <br>
        <h4>Example Result (PNG w/ transparent background)</h4>
        <img src="imgs/example.png" class="logo" alt="EXAMPLE custom ASSC Logo!">
      </div>


    </div>
  </div>
@endsection