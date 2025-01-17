@extends('layouts.backoffice')
@section('body-styles')
kyctemplate
@endsection('body-styles')
@section('content')

@section('content')
  <div class="container p-6 py-16 md:pt-48 md:pb-12">
    <div class="flex flex-wrap w-full md:mb-12">
        <div class="w-1/2 text-left">
          <h1 class="h2">
          KYC Template Details
          </h1>
        </div>
    </div>
    <good-table url="kyc-template-details"
          filter="kycTemplateId|{{ $kyctemplate->id }}"
  :columns="[
        {
          label: 'Field',
          field: 'field',
        },
        {
          label: 'Data',
          field: 'data',
        }
      ]"
      :hideSearch=true
  ></good-table>

    <br><br>

  </div>
@endsection('content')
