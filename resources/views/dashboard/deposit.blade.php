<html lang="en" data-theme="dark"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Funds</title>
	<link rel="icon" type="image/png" sizes="32x32" href="https://www.coinpayments.net/images/oglogo.png" />    
	<script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    :root {
        --color-primary: #ff0000;
        --color-secondary: #8b5cf6;
        --color-accent: #a78bfa;
        --color-success: #10b981;
        --color-warning: #f59e0b;
        --color-danger: #ef4444;
        --color-bg-body: #0a0a0f;
        --color-bg-card: #12121f;
        --color-text: #ffffff;
        --color-text-muted: #9ca3af;
    }

    * {
        font-family: 'Inter', sans-serif;
    }

    body {
        background-color: var(--color-bg-body);
        color: var(--color-text);
    }

    /* Brand */
    .btn-brand {
        background: linear-gradient(
            135deg,
            var(--color-primary),
            var(--color-secondary)
        );
    }

    .btn-brand:hover {
        box-shadow: 0 10px 15px -3px
            color-mix(
                in srgb,
                var(--color-primary) 25%,
                transparent
            );
    }

    /* Confirmation Card */
    .dark-card {
        background-color: #131a22;
        color: #f8f9fa;
    }

    /* Scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-track {
        background: color-mix(
            in srgb,
            var(--color-bg-body) 80%,
            #1a1a2e
        );
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(
            135deg,
            var(--color-primary),
            var(--color-secondary)
        );
        border-radius: 10px;
    }

    /* Form */
    input,
    select,
    textarea {
        background: color-mix(
            in srgb,
            var(--color-bg-body) 85%,
            #000
        ) !important;

        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        color: white !important;
    }

    input:focus,
    select:focus {
        border-color: var(--color-primary) !important;
        outline: none !important;

        box-shadow: 0 0 0 3px
            color-mix(
                in srgb,
                var(--color-primary) 20%,
                transparent
            ) !important;
    }

    /* Copy Button */
    .copy-btn {
        transition: all 0.2s ease;
    }

    .copy-btn:hover {
        background: color-mix(
            in srgb,
            var(--color-primary) 20%,
            transparent
        );
    }

    /* Wallet Address */
    .address-display {
        font-family: 'Courier New', monospace;
        letter-spacing: 0.5px;
        word-break: break-all;
    }

    /* Text Selection */
    ::selection {
        background: var(--color-primary);
        color: #fff;
    }
</style>



<main class="pt-24 pb-24 lg:pb-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="mb-6 bg-[#12121f] border border-white/5 rounded-2xl p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="flex items-center gap-3.5">
            <div class="w-12 h-12 rounded-2xl flex items-center justify-center" style="background-color: color-mix(in srgb, var(--color-success) 15%, transparent); border: 1px solid color-mix(in srgb, var(--color-success) 25%, transparent);">
                <i class="fas fa-arrow-down text-xl" style="color: var(--color-success);"></i>
            </div>
            <div>
                <h1 class="text-2xl font-black text-white">Deposit Funds</h1>
                <p class="text-white/45 text-xs sm:text-sm">Fund your account via verified payment gateways</p>
            </div>
        </div>

    </div>

    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Deposit Form -->
        <div class="lg:col-span-2">
			<div id="depositCard" class="bg-[#12121f] border border-white/5 rounded-2xl p-6 md:p-8 transition-all duration-500">
                <form method="POST" id="depositForm">

                    <div class="mb-6">
                        <label for="wallet_id" class="block text-sm font-semibold text-white/75 mb-2.5">
                            <i class="fas fa-wallet mr-1.5" style="color: var(--color-primary);"></i> 1. Select Payment Gateway
                        </label>

                        
                        <select name="wallet_id" id="wallet_id" class="w-full rounded-xl px-4 py-3 transition-all text-sm" required="">
                            <option value="">-- Choose Deposit Gateway --</option>
                                                            <option selected value="1" data-address="bc1qxp2wf0tp9h388d0fz6s5lf3vpjaadf73azrvuf">
                                    Bitcoin (BTC)                                </option>
                                                            <option value="2" data-address="0x5fa0e9850e04ff65b7742001c274400c2810cc1a">
                                    Ethereum (ETH)                                </option>
                                                            <option value="3" data-address="0x5fa0e9850e04ff65b7742001c274400c2810cc1a">
                                    Binance Coin (BNB)                                </option>
                                                            <option value="3" data-address="0x5fa0e9850e04ff65b7742001c274400c2810cc1a">
                                    USDT (ERC20)                                </option>
                                                            <option value="3" data-address="TCGELpn9eVaTJ4umsK1nrVP3yZG1h5bpbw">
                                    USDT (TRC20)                                </option>
                                                            <option value="3" data-address="0x5fa0e9850e04ff65b7742001c274400c2810cc1a">
                                    USDT (BSC20)                                </option>
                                                    </select>
                                            </div>

                    <div class="mb-6">
                        <label for="wallet_address" class="block text-sm font-semibold text-white/75 mb-2">
                            <i class="fas fa-qrcode mr-1.5" style="color: var(--color-primary);"></i> 2. Deposit Address
                        </label>
                        <div class="flex items-center gap-2">
                            <input type="text" id="wallet_address" class="flex-1 rounded-xl px-4 py-3 transition-all wallet-address-wrapper address-display text-sm" placeholder="Select a wallet above to reveal official deposit address" value="" readonly="" required="" style="">
                            <button type="button" id="copyAddressBtn" class="copy-btn px-4 py-3 bg-white/5 text-white/80 rounded-xl border border-white/10 transition-all flex items-center gap-2 font-semibold">
                                <i class="fas fa-copy"></i>
                                <span class="hidden sm:inline text-sm">Copy</span>
                            </button>
                        </div>
                        <div id="qrCodeBox" class="mt-3 p-4 rounded-xl bg-white/5 border border-white/10 flex items-center gap-4">
                            <img id="qrCodeImg" src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&amp;data=bc1qxp2wf0tp9h388d0fz6s5lf3vpjaadf73azrvuf" alt="Wallet QR" class="w-20 h-20 rounded-lg bg-white p-1.5 flex-shrink-0">
                            <div class="text-xs text-white/60 space-y-1">
                                <div class="font-bold text-white">Scan QR Code to Pay</div>
                                <p>Send only the selected asset network to this verified address. Sending unsupported assets may result in permanent loss.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="amount" class="block text-sm font-semibold text-white/75 mb-2">
                            <i class="fas fa-dollar-sign mr-1.5" style="color: var(--color-primary);"></i> 3. Deposit Amount (USD)
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 font-bold">$</span>
                            <input type="number" name="amount" id="amount" class="w-full rounded-xl pl-8 pr-4 py-3 transition-all text-base font-bold" placeholder="0.00" step="0.01" min="10" value="" required="">
                        </div>
                        <div class="flex flex-wrap items-center gap-2 mt-2.5">
						                                    <button type="button" onclick="document.getElementById('amount').value='50'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $50                                </button>
                                                            <button type="button" onclick="document.getElementById('amount').value='100'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $100                                </button>
                                                            <button type="button" onclick="document.getElementById('amount').value='250'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $250                                </button>
                                                            <button type="button" onclick="document.getElementById('amount').value='500'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $500                                </button>
                                                            <button type="button" onclick="document.getElementById('amount').value='1000'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $1,000                                </button>
                                                            <button type="button" onclick="document.getElementById('amount').value='5000'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $5,000                                </button>
                                                            <button type="button" onclick="document.getElementById('amount').value='10000'" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white/70 hover:text-white transition-all">
                                    $10,000                                </button>
                                                    </div>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-white/40 text-xs">Minimum: $50.00</span>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                    name="deposit_submit"
                    class="btn-brand w-full py-4 text-white font-bold rounded-xl transition-all hover:scale-[1.01] flex items-center justify-center gap-3 shadow-xl">
                <i class="fas fa-arrow-down"></i>
                Confirm Deposit Request
            </button>

                    <p class="text-white/30 text-xs text-center mt-4">
                        <i class="fas fa-lock mr-1"></i> Your transaction is protected by 256-bit SSL encryption.
                    </p>
                </form>
            </div>
			<div id="confirmationCard"
         class="hidden opacity-0 translate-y-4 transition-all duration-500">

        <div class="bg-[#12121f] border border-white/5 p-6 md:p-8 rounded-2xl">

            <div class="flex justify-center items-center min-h-[420px]">

                <div class="dark-card text-white p-6 shadow-lg text-center w-full"
                     style="max-width:450px; border-radius:15px;">

                    <div class="card-body">

                        <div class="loader-wrap">

                            <div class="flex justify-center">
                                <div class="w-12 h-12 rounded-full border-4 border-white/10 border-t-yellow-400 animate-spin">
                                </div>
                            </div>

                            <h5 class="mt-5 text-lg font-bold">
                                Waiting for Confirmation...
                            </h5>

                            <p class="text-white/40 text-sm mt-2">
                                This may take a few minutes depending on the blockchain speed.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

        </div>

        <!-- Right Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-[#12121f] border border-white/5 rounded-2xl p-6 sticky top-24">
                <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4">
                    <i class="fas fa-info-circle text-white/40 mr-2"></i> Instructions
                </h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-3 text-white/60">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[10px] font-bold" style="background-color: color-mix(in srgb, var(--color-primary) 20%, transparent); color: var(--color-primary);">1</span>
                        <span>Select your payment gateway.</span>
                    </li>
                    <li class="flex items-start gap-3 text-white/60">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[10px] font-bold" style="background-color: color-mix(in srgb, var(--color-primary) 20%, transparent); color: var(--color-primary);">2</span>
                        <span>Copy the wallet address or scan the QR code to make your payment.</span>
                    </li>
                    <li class="flex items-start gap-3 text-white/60">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[10px] font-bold" style="background-color: color-mix(in srgb, var(--color-primary) 20%, transparent); color: var(--color-primary);">3</span>
                        <span>Enter the exact amount deposited (minimum $50.00).</span>
                    </li>
                    <li class="flex items-start gap-3 text-white/60">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[10px] font-bold" style="background-color: color-mix(in srgb, var(--color-primary) 20%, transparent); color: var(--color-primary);">4</span>
                        <span>Click "Confirm Deposit Request" after payment have made.</span>
                    </li>
                </ul>
                <div class="mt-6 p-4 rounded-xl" style="background-color: color-mix(in srgb, var(--color-primary) 5%, transparent); border: 1px solid color-mix(in srgb, var(--color-primary) 10%, transparent);">
                    <div class="flex items-center gap-2 text-sm" style="color: var(--color-primary);">
                        <i class="fas fa-clock"></i>
                        <span class="font-medium">Processing Time</span>
                    </div>
                    <p class="text-white/40 text-xs mt-1">Deposits are credited rapidly once network confirmation is verified.</p>
                </div>

                          
                            </div>
        </div>
    </div>

</main>


<script>

    const walletSelect = document.getElementById('wallet_id');
    const addressInput = document.getElementById('wallet_address');

    function selectDepositWalletCard(walletId) {
        walletSelect.value = String(walletId);
        updateWalletAddress();
    }

    function updateWalletAddress() {
        const selectedOption = walletSelect.options[walletSelect.selectedIndex];
        const qrBox = document.getElementById('qrCodeBox');
        const qrImg = document.getElementById('qrCodeImg');

        document.querySelectorAll('.deposit-wallet-card').forEach(btn => {
            if (btn.getAttribute('data-wallet-card') === walletSelect.value) {
                btn.style.borderColor = 'var(--color-primary)';
                btn.style.background = 'color-mix(in srgb, var(--color-primary) 12%, transparent)';
            } else {
                btn.style.borderColor = '';
                btn.style.background = '';
            }
        });

        if (selectedOption && selectedOption.value !== '') {
            const address = selectedOption.getAttribute('data-address');
            if (address) {
                addressInput.value = address;
                if (qrBox && qrImg) {
                    qrImg.src = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data='.concat(encodeURIComponent(address));
                    qrBox.classList.remove('hidden');
                }
                addressInput.style.borderColor = 'color-mix(in srgb, var(--color-success) 50%, transparent)';
                addressInput.style.boxShadow = '0 0 0 3px color-mix(in srgb, var(--color-success) 10%, transparent)';
                setTimeout(() => {
                    addressInput.style.borderColor = '';
                    addressInput.style.boxShadow = '';
                }, 2000);
            }
        } else {
            addressInput.value = '';
            addressInput.placeholder = 'Select a wallet above to reveal official deposit address';
            if (qrBox) qrBox.classList.add('hidden');
        }
    }

    walletSelect.addEventListener('change', updateWalletAddress);

    document.addEventListener('DOMContentLoaded', function() {
        if (walletSelect.value !== '') {
            updateWalletAddress();
        }
    });

    document.getElementById('copyAddressBtn').addEventListener('click', function() {
        const address = addressInput.value.trim();
        if (address === '') {
            addressInput.style.borderColor = 'color-mix(in srgb, var(--color-danger) 50%, transparent)';
            addressInput.style.boxShadow = '0 0 0 3px color-mix(in srgb, var(--color-danger) 20%, transparent)';
            setTimeout(() => {
                addressInput.style.borderColor = '';
                addressInput.style.boxShadow = '';
            }, 1500);

            const btn = this;
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-exclamation-triangle" style="color: var(--color-warning);"></i><span class="hidden sm:inline text-sm">Select wallet first!</span>';
            btn.style.color = 'var(--color-warning)';
            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.style.color = '';
            }, 2000);
            return;
        }

        navigator.clipboard.writeText(address).then(() => {
            const btn = this;
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check" style="color: var(--color-success);"></i><span class="hidden sm:inline text-sm">Copied!</span>';
            btn.style.color = 'var(--color-success)';
            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.style.color = '';
            }, 2000);
        }).catch(() => {
            addressInput.select();
            addressInput.setSelectionRange(0, 99999);
            document.execCommand('copy');
            alert('Address copied to clipboard!');
        });
    });


document.getElementById('depositForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = this;

    const walletSelect = document.getElementById('wallet_id');
    const addressInput = document.getElementById('wallet_address');
    const amountInput = document.getElementById('amount');
    const submitBtn = form.querySelector('button[type="submit"]');

    const minAmount = 50;
    let valid = true;

    [walletSelect, addressInput, amountInput].forEach(el => {
        el.style.borderColor = '';
        el.style.boxShadow = '';
    });

    if (walletSelect.value === '') {
        walletSelect.style.borderColor = 'var(--color-danger)';
        walletSelect.style.boxShadow =
            '0 0 0 3px color-mix(in srgb, var(--color-danger) 20%, transparent)';
        valid = false;
    }

    if (addressInput.value.trim() === '') {
        addressInput.style.borderColor = 'var(--color-danger)';
        addressInput.style.boxShadow =
            '0 0 0 3px color-mix(in srgb, var(--color-danger) 20%, transparent)';
        valid = false;
    }

    const amount = parseFloat(amountInput.value);

    if (isNaN(amount) || amount < minAmount) {
        amountInput.style.borderColor = 'var(--color-danger)';
        amountInput.style.boxShadow =
            '0 0 0 3px color-mix(in srgb, var(--color-danger) 20%, transparent)';
        valid = false;
    }

    if (!valid) {
        return;
    }


    submitBtn.disabled = true;

    submitBtn.innerHTML = `
        <span class="w-5 h-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
        <span>Processing...</span>
    `;

    submitBtn.classList.remove('hover:scale-[1.01]');
    submitBtn.style.opacity = '0.8';
    submitBtn.style.cursor = 'not-allowed';

    setTimeout(() => {

        const depositCard = document.getElementById('depositCard');
        const confirmationCard = document.getElementById('confirmationCard');

        depositCard.classList.add(
            'opacity-0',
            'translate-y-4'
        );

        setTimeout(() => {

            depositCard.classList.add('hidden');

            confirmationCard.classList.remove('hidden');

            confirmationCard.classList.add(
                'opacity-0',
                'translate-y-4'
            );

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    confirmationCard.classList.remove(
                        'opacity-0',
                        'translate-y-4'
                    );
                });
            });

        }, 400);

    }, 3000);

});
</script>
</html>
