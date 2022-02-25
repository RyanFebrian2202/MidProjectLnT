@extends('layouts.frame')
@section('content')

{{-- Manage Banner --}}
<div class="container bg-light rounded-3 pt-2 pb-2">
    <div class="col-md-12 bg-light table-wrapper">
        <h3 style="font-weight: bold"><i class="uil uil-apps"></i> Manage Book</h3>
        <hr>

        {{-- Menu Bar --}}
        <header>
            <a href="{{route('getCreatePage')}}" class="btn btn-dark btn-sm mb-4" style="font-weight: bold">Tambah
                Buku</a>
            <form class="d-flex" method="">
                <div class="sort dropbtn">
                    <button class="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--bx iconify-inline" width="1em"
                            height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="bx:bx-sort"
                            style="vertical-align: -0.125em;">
                            <path fill="currentColor" d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"></path>
                        </svg>
                        <span>Sort</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="a-z" value="ASC" name="sort">
                            <button type="submit" value="ASC" name="sort">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--akar-icons iconify-inline"
                                    width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                    data-icon="akar-icons:arrow-down" style="vertical-align: -0.125em; color: black;">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M12 20V4m-7 9l7 7l7-7"></path>
                                </svg>
                                <span>A to Z</span>
                            </button>
                        </li>
                        <li class="z-a" value="DESC" name="sort">
                            <button type="submit" value="DESC" name="sort">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--akar-icons iconify-inline"
                                    width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                    data-icon="akar-icons:arrow-up" style="vertical-align: -0.125em; color: black;">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M12 20V4m-7 7l7-7l7 7"></path>
                                </svg>
                                <span>Z to A</span>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="filter dropbtn">
                    <button class="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--bx iconify-inline" width="1em"
                            height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                            data-icon="bx:bx-filter-alt" style="vertical-align: -0.125em; color: black;">
                            <path fill="currentColor"
                                d="M21 3H5a1 1 0 0 0-1 1v2.59c0 .523.213 1.037.583 1.407L10 13.414V21a1.001 1.001 0 0 0 1.447.895l4-2c.339-.17.553-.516.553-.895v-5.586l5.417-5.417c.37-.37.583-.884.583-1.407V4a1 1 0 0 0-1-1zm-6.707 9.293A.996.996 0 0 0 14 13v5.382l-2 1V13a.996.996 0 0 0-.293-.707L6 6.59V5h14.001l.002 1.583l-5.71 5.71z">
                            </path>
                        </svg>
                        <span>Filter</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="a-z" name="filter" value="0">
                            <button name="filter" value="0" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--akar-icons iconify-inline"
                                    width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                    data-icon="akar-icons:square-fill" style="vertical-align: -0.125em; color: white;">
                                    <rect width="20" height="20" x="2" y="2" fill="black" rx="2"></rect>
                                </svg>
                                <span>>0</span>
                            </button>
                        </li>
                        <li class="a-z" name="filter" value="500">
                            <button name="filter" value="500" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--akar-icons iconify-inline"
                                    width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                    data-icon="akar-icons:square-fill" style="vertical-align: -0.125em; color: white;">
                                    <rect width="20" height="20" x="2" y="2" fill="black" rx="2"></rect>
                                </svg>
                                <span>>500</span>
                            </button>
                        </li>
                        <li class="a-z" name="filter" value="1000">
                            <button name="filter" value="1000" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--akar-icons iconify-inline"
                                    width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                    data-icon="akar-icons:square-fill" style="vertical-align: -0.125em; color: white;">
                                    <rect width="20" height="20" x="2" y="2" fill="black" rx="2"></rect>
                                </svg>
                                <span>>1000</span>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="search">
                    <input class="form-control me-2" name="search" type="search" placeholder="Cari Judul Buku"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
        </header>

        {{-- Manage Book --}}
        <table class="table">
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Jumlah Halaman</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
            ?>
                @foreach ($books as $book)
                <tr align="center">
                    <th>{{$nomor++}}</th>
                    <td>{{$book->judul}}</td>
                    <td>{{$book->penulis}}</td>
                    <td>{{$book->jumlah_halaman}}</td>
                    <td>{{$book->tahun_terbit}}</td>
                    <td class="aksi">
                        <a class="edit" href="{{route('getUpdatePage', ['id'=>$book->id])}}"><button type="submit"
                                class="btn btn-success"><i class="uil uil-edit"></i></button></a>
                        <form action="{{route('deleteBook', ['id'=>$book->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="uil uil-times-square"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br><br><br><br><br>

@endsection
