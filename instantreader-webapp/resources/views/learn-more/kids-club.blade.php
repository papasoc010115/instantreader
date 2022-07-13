@extends('layouts.marketing-layout')

@section('content')
<!--PAGE CONTENT START -->

<script>
    // hide shapes from template
    try{
        document.getElementById("shape-left").style.visibility = "hidden";
        document.getElementById("shape-right").style.visibility = "hidden";
        document.getElementById("full-menu-1").style.visibility = "hidden";
    }catch(e){
        
    }
</script>
<!--PAGE CONTENT END -->
@endsection