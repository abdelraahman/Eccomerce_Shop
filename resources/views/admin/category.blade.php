@extends('admin.layout')
<style>
    /* minified css */
    .no-padding {
        padding-left: 0;
        padding-right: 0
    }

    body {
        background-size: cover;
        background-position: top center;
        font-size: 1em;
        color: white;
    }

    img.img-responsive {
        max-width: 100%
    }

    .margin--top50 {
        margin-top: 50px !important
    }

    .margin--top40 {
        margin-top: 40px !important
    }

    .margin--top30 {
        margin-top: 30px !important
    }

    .margin--bottom40 {
        margin-bottom: 40px
    }

    .margin--bottom50 {
        margin-bottom: 50px
    }

    .margin--bottom60 {
        margin-bottom: 60px
    }

    .margin--bottom70 {
        margin-bottom: 70px
    }

    .margin--both70 {
        margin-bottom: 70px;
        margin-top: 70px
    }

    .margin--both80 {
        margin-bottom: 80px;
        margin-top: 80px
    }

    .padding--top1em {
        padding-top: 1em
    }

    .padding--top2em {
        padding-top: 2em
    }

    .padding--top3em {
        padding-top: 3em
    }

    .padding--top4em {
        padding-top: 4em
    }

    .padding--top5em {
        padding-top: 5em
    }

    .padding--bottom1em {
        padding-bottom: 1em
    }

    .padding--bottom2em {
        padding-bottom: 2em
    }

    .padding--bottom3em {
        padding-bottom: 3em
    }

    .padding--bottom4em {
        padding-bottom: 4em
    }

    .padding--bottom5em {
        padding-bottom: 5em
    }

    .padding--both1em {
        padding-top: 1em;
        padding-bottom: 1em
    }

    .padding--both2em {
        padding-top: 2em;
        padding-bottom: 2em
    }

    .padding--both3em {
        padding-top: 3em;
        padding-bottom: 3em
    }

    .padding--both4em {
        padding-top: 4em;
        padding-bottom: 4em
    }

    .padding--both5em {
        padding-top: 5em;
        padding-bottom: 5em
    }

    .image-background {
        position: relative;
        z-index: 1;
        background-size: cover;
        width: 100%;
        min-height: 150px
    }

    .image-background>img {
        position: relative;
        z-index: 1;
        display: none !important
    }

    .default-container {
        overflow: hidden
    }

    .btn {
        border-radius: 0
    }

    .btn i {
        margin-right: 15px
    }

    .btn--primary {
        display: block;
        background: #fff;
        ;
        width: 100%;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
        padding: 15px 30px;
        border-radius: 10px
    }

    .btn--primary:hover {
        color: #fff !important;
        background: #023f57
    }

    .btn--secondary {
        background: #fff;
        ;
        border-radius: 0;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        padding: 10px 30px;
        border: 0
    }

    .btn--register {
        background: #d90000;
        border-radius: 100px;
        padding: 10px 50px !important;
        display: inline-block;
        color: #fff !important;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        border-radius: 100px !important
    }

    .btn--login {
        background: #fff;
        border-radius: 100px;
        padding: 10px 50px !important;
        display: inline-block;
        color: #fff;
         !important;
        margin-right: 20px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        border-radius: 100px !important
    }

    .btn--reset {
        display: block;
        width: 100%;
        padding: 10px 15px;
        background: #313131;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600
    }

    .btn--reset:hover {
        background: #262626
    }

    .btn--register,
    .btn--login {
        font-weight: bold;
        text-transform: uppercase
    }

    .btn--register:hover,
    .btn--login:hover {
        opacity: .6
    }

    .btn--forgot {
        padding: 0;
        font-weight: 600;
        margin-top: 10px
    }

    .btn--customer-registration {
        background: #d90000;
        display: block;
        padding: 10px 15px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 700;
        border-radius: 0
    }

    .btn--flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .btn--edit,
    .btn--delete {
        padding: 15px 25px !important;
        text-align: center;
        color: #fff;
        border: 0
    }

    .btn--edit i,
    .btn--delete i {
        margin: 0;
        font-size: 1.2em
    }

    .btn--edit {
        background: #258ece
    }

    .btn--edit:hover {
        background: #fff;
    }

    .btn--delete {
        background: #d90000
    }

    .btn--delete:hover {
        background: #fff;
    }

    .btn--dropdown {
        margin-right: 10px
    }

    .btn--dropdown a {
        padding: 15px 20px;
        background: #0b6da8;
        border: 0
    }

    .btn--dropdown a:hover {
        background: #023f7d
    }

    .btn--dropdown.show>a {
        background-color: #fff;
         !important;
        border-color: transparent !important;
        outline: none
    }

    .btn--dropdown.show .dropdown-menu {
        padding: 0 !important;
        border: 0;
        width: 100%;
        background: transparent !important;
        margin: 0;
        margin-right: 0px
    }

    .btn--dropdown.show .dropdown-menu button,
    .btn--dropdown.show .dropdown-menu a {
        background: #fff;
         !important;
        padding: 10px 15px;
        color: #fff !important;
        font-weight: 600;
        white-space: normal;
        font-size: .7em;
        display: block
    }

    .btn--dropdown.show .dropdown-menu button:hover,
    .btn--dropdown.show .dropdown-menu a:hover {
        background: #242323 !important
    }

    .btn--delete-modal {
        background: #d90000;
        display: block;
        width: 100%;
        width: 100%;
        padding: 10px;
        border: 0
    }

    .btn--delete-modal:hover {
        background: #9f0000
    }

    .btn--edit-address {
        display: block;
        width: 100%;
        margin-bottom: 10px;
        text-transform: uppercase;
        font-weight: bold
    }

    .btn--save-changes {
        background: #334f60;
        border: 0;
        text-transform: uppercase;
        font-weight: bold;
        padding: 0px 25px;
        color: #fff
    }

    .btn--save-changes:hover {
        background: #023f57
    }

    .btn--delete-account {
        display: block;
        width: 100%;
        background: transparent;
        border: 0;
        font-weight: bold;
        color: #d90000;
        padding: 10px;
        text-transform: uppercase
    }

    header .logo_styling {
        width: 80px
    }

    header.header_area.fixed {
        background: #334f60;
        position: fixed;
        width: 100%;
        left: 0;
        top: 0;
        z-index: 99
    }

    header .navbar-nav>li {
        margin-right: 17px
    }

    header .navbar-nav>li>a {
        font-size: .9em;
        color: #fff !important;
        text-transform: uppercase;
        font-weight: bold;
        font-family: 'Poppins', sans-serif
    }

    .banner-slider {
        height: 100vh;
        padding: 0
    }

    .banner-slider__slick {
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-line-pack: center;
        align-content: center;
        width: 100%
    }

    .banner-slider__slick div {
        width: 100%;
        height: 100%
    }

    .banner-slider__slick--item {
        padding: 0 5%
    }

    .banner-slider__slick:before {
        content: '';
        width: 100%;
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        height: 100%
    }

    .banner-slider__content {
        max-height: 300px;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto
    }

    .banner-slider__content h1,
    .banner-slider__content p {
        color: #fff
    }

    .banner-slider__content h1 {
        font-size: 3em;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        font-weight: 600
    }

    .banner-slider__content p {
        font-family: "Open Sans", sans-serif;
        font-size: 1.1em;
        line-height: 24px;
        margin-bottom: 35px
    }

    .account-form-box {
        width: 100%;
        left: 0;
        padding: 30px 40px;
        border-radius: 20px;
        margin: 0;
        background: #fff;
        -webkit-box-shadow: 0 1px 5px 1px rgba(0, 0, 0, 0.5);
        box-shadow: 0 1px 5px 1px rgba(0, 0, 0, 0.5)
    }

    .account-form-box input {
        border-radius: 0;
        padding: 10px 15px
    }

    .account-form-box h4 {
        font-size: 1em;
        font-weight: 600;
        text-transform: uppercase
    }

    .account-form-box h2 {
        margin-bottom: 35px;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
        font-weight: bold
    }

    .account-form-box label {
        font-size: .9em;
        font-weight: 500
    }

    .account-form-box__login,
    .account-form-box__forgot,
    .account-form-box__reset {
        max-width: 500px;
        margin: auto !important
    }

    .account-form-box__register {
        max-width: 900px;
        margin: auto !important
    }

    .account-form-box__customer-setting {
        margin-bottom: 100px
    }

    #new-business-modal .modal-dialog {
        max-width: 500px
    }

    .modal-backdrop.show {
        opacity: .8 !important
    }

    .modal .modal-body {
        font-size: .9em;
        font-weight: bold
    }

    .modal .modal-content {
        border-radius: 0;
        border: 5px solid #00638a
    }

    .modal .modal-header h5 {
        font-weight: bold;
        text-transform: uppercase;
        color: #005d82;
        font-size: 1.6em
    }

    .modal .modal-dialog input {
        border-radius: 0;
        padding: 10px 15px
    }

    .modal .modal-footer.text-center a {
        display: block;
        width: 100%;
        text-decoration: none
    }

    .main-container .container {
        max-width: 1500px
    }

    .main-container--fullheight {
        height: 100vh;
        padding: 170px 0
    }

    .main-container--normal {
        background: #f7f7f7;
        padding-top: 120px;
        min-height: 750px;
        height: auto
    }

    .row.row-clear {
        margin: 0
    }

    .already-member {
        margin: 15px;
        font-size: 1em
    }

    .already-member a {
        text-transform: uppercase;
        font-weight: bold;
        color: #004388
    }

    .divider {
        height: 2px;
        width: 100%;
        background: #e6dada;
        clear: both;
        display: inline-block;
        margin: 20px 0
    }

    .login-background {
        background: url("https://image.shutterstock.com/z/stock-photo-woman-using-laptop-searching-web-browsing-information-having-workplace-at-home-soft-focus-668819653.jpg") no-repeat;
        background-size: cover
    }

    .login-background:before {
        background: rgba(0, 0, 0, 0.2);
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        top: 0;
        left: 0
    }

    .dashboard-content {
        width: 100%;
        left: 0
    }

    .avatar {
        width: 80px;
        height: 80px;
        display: inline-block;
        float: left;
        border-radius: 100%;
        border: 5px solid #ffeaea;
        margin-right: 20px;
        -webkit-box-shadow: 0 1px 5px 1px rgba(0, 0, 0, 0.5);
        box-shadow: 0 1px 5px 1px rgba(0, 0, 0, 0.5);
        overflow: hidden
    }

    .avatar img {
        height: 100%;
        width: auto !important
    }

    .dasbboad-name h1 {
        font-family: "Poppins", sans-serif;
        font-weight: 600
    }

    .welcome-picture {
        display: block;
        width: 100%;
        height: 450px;
        margin: 45px 0;
        overflow: hidden
    }

    .welcome-picture img {
        max-width: 100%
    }

    .dashboard-header {
        margin-bottom: 30px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px
    }

    .dashboard-header__name {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-line-pack: center;
        align-content: center
    }

    .dashboard-header__name img {
        display: inline-block;
        border: 5px solid #ddd;
        border-radius: 100%;
        overflow: hidden
    }

    .dashboard-header__name h1,
    .dashboard-header__name h2 {
        font-weight: bold;
        color: #334f60;
        margin-top: 10px
    }

    .dashboard-header__name .name-container {
        width: 100%
    }

    .dashboard-header__name .logo-container {
        margin-right: 15px
    }

    .thubmnail-group a {
        padding-left: 20px;
        display: inline-block;
        width: 100%;
        text-decoration: none;
        outline: none
    }

    .thubmnail-group a i {
        position: absolute;
        font-size: 1.7em;
        top: -13px;
        bottom: 0;
        height: 50px;
        margin: auto;
        left: 20px
    }

    .thubmnail-group a>div {
        border: 0;
        background: #005386;
        padding: 20px inherit;
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-box-shadow: 2px 5px 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 2px 5px 5px 0 rgba(0, 0, 0, 0.2);
        margin-bottom: 0 !important;
        padding-left: 73px;
        min-height: 180px
    }

    .thubmnail-group a h5 {
        margin: 0;
        font-weight: bold;
        color: #fff;
        font-size: 1.7em
    }

    .thubmnail-group a p {
        font-size: 1em;
        font-weight: 600;
        color: #fff
    }

    .button-options {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
    }

    .button-options div {
        margin-right: 10px
    }

    .button-options button {
        margin-right: 10px
    }

    .table-box .table .thead-dark th {
        background-color:
            #e91e63 !important;
        border: 0;
        border-right-color: currentcolor;
        border-right-style: none;
        border-right-width: 0px;
        font-size: 13px !important;
        line-height: 20px;
        padding: 10px;
        vertical-align: top;
        word-wrap: break-word;
        border-right: 2px solid #ddd;
        color: white;
    }

    .table-box .table tbody td {
        font-size: .9em !important;
        text-align: center;
        vertical-align: middle;
        color: white;
    }




    @-moz-document url-prefix() {}


    .table-box {
        padding: 20px;
        box-sizing: borderbox;
    }

    /* hide elements */
    .table-box .dataTables_length.bs-select,
    .table-box .dataTables_info,
    .table-box .dataTables_paginate.paging_simple_numbers {
        display: none;
    }
</style>
@section('content')
    <div>
        <h1>Welcome To Your Category</h1>
        <hr>
        @if ($message = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                {{ $message }}
            </div>
        @endif
        <div class=" container">
            <a class="btn btn-primary btn-lg" href="{{ route('category.create') }}" role="button">Create Category</a>
            <?php
            $i = 0;
            ?>
            <div class=" table-box table-responsive">
                <table class="sort-table-product table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <tr>
                            <th style="text-align: center">#</th>
                            <th style="text-align: center">Category Title</th>
                            <th style="text-align: center">Category Description</th>
                            <th style="text-align: center">Category Image</th>
                            <th style="text-align: center">Actions</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td style="color: #344767">{{ ++$i }}</th>
                                <td style="color: #344767">{{ $item->title }}</td>
                                <td style="color: #344767">{{ $item->description }}</td>
                                <td><img class="img-tumbnail" src="{{ URL::asset($item->image) }}" alt="{{ $item->image }}"
                                        width="100" height="100"></td>
                                <td>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <a class="btn btn-success"
                                                    href="{{ route('category.edit', $item->id) }}">Edit</a>
                                            </div>
                                            <div class="col-sm">
                                                <a class="btn btn-primary"
                                                    href="{{ route('category.show', $item->id) }}">Show</a>
                                            </div>
                                            <div class="col-sm">
                                                <a class="btn btn-danger"
                                                    href="{{ route('category.destroy', $item->id) }}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
