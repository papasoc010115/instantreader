@extends('layouts.marketing-layout')

@section('content')
<!--PAGE CONTENT START -->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>

    <div class="auto-container">
        <h2 class="hide-cursor">Frequently Asked Questions</h2>
        <ul class="page-breadcrumb link">
            <li>
                <i>
                   How can we help you? 
                </i>
            </li>
        </ul>
    </div>
</section>

<script>
    document.getElementById("shape-left").style.visibility = "hidden";
    document.getElementById("shape-right").style.visibility = "hidden";
</script>
<!--PAGE CONTENT END -->
@endsection