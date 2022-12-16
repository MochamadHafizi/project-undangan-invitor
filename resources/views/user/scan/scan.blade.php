@extends('user.layouts.master')
@section('content')
    <section id="scan" class="pt-36 mb-32">
        <div class="container">
            <div class="flex flex-wrap text-center justify-center items-center">
                <div class="w-96 self-center px-4">
                    <h1 class="font-bold text-2xl my-10">Scanner Barcode Undangan</h1>
                    <div id="reader" width="600px"></div>
                    <input class="text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 mt-10" type="text" id="result">
                    <button id="copyBtn" class="text-emerald-500 bg-emerald-50 rounded-lg py-2 px-4 ml-5 text-sm">Copy</button>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        // console.log(`Code matched = ${decodedText}`, decodedResult);
        $("#result").val(decodedText);
        }

        function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: {width: 250, height: 250} },
        /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);

         const copyBtn = document.getElementById('copyBtn')
        const copyText = document.getElementById('result')
        copyBtn.onclick = () => {
                copyText.select();    // Selects the text inside the input
                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                 Swal.fire({         //displays a pop up with sweetalert
                    icon: 'success',
                    title: 'Text copied to clipboard',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
    </script>
@endsection