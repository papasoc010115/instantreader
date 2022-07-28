@extends('layouts.marketing-admin-layout')

@section('content')

<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">CONTACT US</h1> 
        <p>Edit content of webpages under "Contact Us" here.</p>  
    </section>  
    
    <!-- Forms -->
    <section class="forms">
        <div class="container-fluid">

            <!--  Free Online Consultation -->
            <div class="row">
                <div class="col-lg-12">
                <h3>Book Free Online Consultation</h3>
                </div>
            </div>

            <!-- Section 1 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="foc-sect1">Section 1</label>
                    <textarea class="form-control" id="foc-sect1" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>

        </div>        
    </section>

</div>




<script>    
    tinymce.init({
        selector: '#foc-sect1',
        plugins: 'link',
        menubar: false,
        toolbar: 'undo redo | bold italic underline | link'
    });
   
</script>
@endsection