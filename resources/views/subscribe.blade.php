<x-app-layout>

<section class="text-gray-700 body-font">
    <div class="container px-8 pt-24 mx-auto lg:px-4">
        <div class="flex flex-wrap text-center">
            @auth
            <div class="px-8 py-6 mx-auto bg-white shadow-xl lg:px-24 lg:w-2/4 md:w-full rounded-xl">
                <div class="flex flex-col items-center justify-center px-2 py-2 text-center">
                    <h3 class="tracking-widest">SUBSCRIBE NOW</h3>
                    <h2 id="amountsub" class="flex items-center justify-center mt-2 mb-4 text-3xl font-bold leading-none text-indigo-900 lg:text-6xl">
                        $10 /mo
                    </h2>
                    <x-jet-label for="subscription" value="{{ __('Select Subscription Plan') }}" />
                    <select id="subscription" name="subscription" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" onchange="AmountSub()">
                        <option value="$10 /mo">Monthly</option>
                        <option value="$100 /yr">Yearly</option>
                    </select>
                </div>
                <p class="mb-4 text-base leading-relaxed">Enjoy all the features and future updates by subscribing.</p>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
            </div>
            @endauth
        </div>
    </div>
    <form id="paypalSuccess" method="POST" action="{{route('subscribe.success')}}">
        @csrf
        <input type="hidden" name="id" value="{{auth()->user()->id}}">
    </form>
</section>
<script src="https://www.paypal.com/sdk/js?client-id=AW1Qs_Gx9LZ7p44oHlNtuuob7CBLy2apmYgS_FCA_alZ8KKXHBSI2kVVBaFFx9VLkJIvc-BmefwGo6Db&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
<script>
function AmountSub() {
    document.getElementById("amountsub").innerHTML = document.getElementById("subscription").value;
}

paypal.Buttons({
    style: {
        shape: 'pill',
        color: 'gold',
        layout: 'vertical',
        label: 'subscribe'
    },
    createSubscription: function(data, actions) {
    return actions.subscription.create({
        'plan_id': document.getElementById("subscription").selectedIndex == 0 ? 'P-7WE14420548315900MARKHBA' : 'P-4YK60862LR3834437MARKIXI'
        // 'plan_id': 'P-7AC46697DR8245903MARL5KQ'
    });
    },
    onApprove: function(data, actions) {
        // alert(data.subscriptionID);
        document.getElementById("paypalSuccess").submit();
    }
}).render('#paypal-button-container');
</script>
</x-app-layout>