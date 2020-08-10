@extends('layouts.master')

@push('script')

<link rel="stylesheet" href="{{asset('/sbadmin2/swal.min.js')}}">
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush