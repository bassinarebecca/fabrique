@extends('layout.pagereserv')

@section('contenu')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="notice notice-success">
        <strong>Notice</strong> notice-success
    </div>
    <div class="notice notice-danger">
        <strong>Notice</strong> notice-danger
    </div>
    <div class="notice notice-info">
        <strong>Notice</strong> notice-info
    </div>
    <div class="notice notice-warning">
        <strong>Notice</strong> notice-warning
    </div>
    <div class="notice notice-lg">
        <strong>Big notice</strong> notice-lg
    </div>
    <div class="notice notice-sm">
        <strong>Small notice</strong> notice-sm
    </div>
</div>
@endsection
