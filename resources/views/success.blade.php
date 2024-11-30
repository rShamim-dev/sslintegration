<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 flex items-center justify-center min-h-screen">

    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-green-500 p-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white mx-auto" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2l4 -4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
            </svg>
            <h2 class="text-2xl font-bold text-white mt-4">Payment Successful!</h2>
            <p class="text-white text-lg mt-2">Thank you for your payment.</p>
        </div>
        <div class="p-6">
            <h3 class="text-lg font-semibold mb-4">Transaction Details:</h3>
            <ul class="space-y-2">
                <li><strong>Name:</strong> Shamim</li>
                <li><strong>Email:</strong> shamim@gmail.com</li>
                <li><strong>Phone:</strong> 01774272645</li>
                <li><strong>Transaction ID:</strong> {{ $order_details->transaction_id }}</li>
                <li><strong>Amount:</strong> {{ $order_details->amount }} {{ $order_details->currency }}</li>
            </ul>
            <div class="mt-6 text-center">
                <a href="{{ url('/') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                    Go to Home
                </a>
            </div>
        </div>
    </div>

</body>

</html>
