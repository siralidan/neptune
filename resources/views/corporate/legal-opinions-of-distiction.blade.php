<x-app-layout>
    <main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                            Legal Opinons of Distiction
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600"> Legal Opinons of Distiction</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex flex-col max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
            <div class="flex-start items-center py-5 md:w-1/3 md:pb-20 md:pt-10 md:pr-10">
                <div class="text-left border border-gray-400 px-2 py-3 rounded-lg" id="itemList">
                </div>
            </div>
            <div class="flex py-5 md:w-full md:pb-20 md:pt-10 md:pr-10">
                <div id="selectedContent" class="text-left px-2 py-3 rounded-lg bg-gray-100">
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<script>
  const itemContents = {
    "Legal Opinions of Distinction": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Legal Opinions of Distinction
    </p>
    <p class="text-xs">
        Your decisions need to be clear. Our legal opinions give you expert insights, making international moves a breeze.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Attain Crystal-Clear Decision-Making with Legal Opinions of Distinction
    </p>
    <p class="text-xs">
        Welcome to a realm where ambiguity fades and informed decisions emerge through our Legal Opinions of Distinction. At Neptune Fiduciaries Group, we understand that in the complex world of international business, clarity is paramount. Our legal opinions serve as beacons of expert insight, illuminating the path to successful international moves and strategies.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Why Opt for Legal Opinions of Distinction?
    </p>
    <p class="text-xs">
        Informed Choices: Our legal opinions offer you expert analysis and recommendations, enabling you to make well-informed decisions with confidence. Mitigated Risks: By addressing potential legal pitfalls and challenges, our opinions help you navigate complex landscapes while minimizing risks. Regulatory Compliance: Stay compliant with international laws and regulations, ensuring that your business operations remain on solid legal ground. Strategic Advancement: Leverage our legal insights to strategically plan and execute your international ventures, giving you a competitive edge.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        How Our Legal Opinions Illuminate the Path
    </p>
    <p class="text-xs">
        Expert Guidance: Our seasoned legal professionals delve into the intricacies of international law to provide you with comprehensive and reliable legal opinions. Custom-Tailored: Every opinion is tailored to your specific situation, industry, and goals, ensuring its relevance and applicability. Clear Recommendations: We offer clear, actionable recommendations that guide your decision-making process, ensuring you're well-prepared for any legal scenario. Risk Assessment: Gain a comprehensive understanding of potential legal risks and how to mitigate them, giving you confidence in your chosen strategies.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Benefits Beyond Clarity
    </p>
    <p class="text-xs">
        Confident Moves: Navigate international waters confidently, armed with expert legal opinions that empower you to make impactful decisions. Legal Shield: Safeguard your ventures from legal uncertainties, ensuring your strategies are grounded in solid legal principles. Strategic Edge: By capitalizing on legal insights, you position your business to seize opportunities and outmaneuver competitors.
    </p>
    <p class="text-xs">
        Are you ready to gain the clarity needed for seamless international maneuvers? Our Legal Opinions of Distinction serve as your guiding light, ensuring that your decisions are not only clear but also legally sound. Get in touch with one of our experts to learn how Neptune Fiduciaries Group can unlock the power of expert legal insights that pave the way for international success.
    </p>
</div>


    `,
 
  
  };

    let selectedItem = null;

    function selectItem(item) {
        const selectedContent = document.getElementById('selectedContent');
        selectedContent.innerHTML = itemContents[item];

        // Remove the active class from the previously selected item
        if (selectedItem) {
            selectedItem.classList.remove('bg-yellow-600', 'text-gray-100', 'hover:text-purple-800',
                'hover:border-gray-400');
            selectedItem.classList.add('bg-gray-200', 'text-purple-800', 'hover:text-gray-600', 'cursor-pointer');
        }

        // Add the active class to the newly selected item
        const newItem = document.getElementById(item);
        newItem.classList.remove('bg-gray-200', 'text-purple-800', 'hover:text-gray-600');
        newItem.classList.add('bg-yellow-600', 'text-gray-100', 'hover:text-purple-800', 'hover:border-gray-400');

        // Update the selected item
        selectedItem = newItem;
    }

    // Generate item list dynamically
    const itemList = document.getElementById('itemList');
    Object.keys(itemContents).forEach(item => {
        const div = document.createElement('div');
        div.id = item;
        div.classList.add('rounded-lg', 'p-2', 'mt-2', 'cursor-pointer', 'bg-gray-200', 'text-purple-800');
        div.innerHTML = `<p class="max-w-md mx-auto text-xs">${item}</p>`;
        div.addEventListener('click', () => selectItem(item));
        itemList.appendChild(div);
    });

    // Select the first item on page load
    const firstItem = Object.keys(itemContents)[0];
    selectItem(firstItem);
</script>
<style scoped>
    .bg-image {
        background-image: url("/images/hero-3.jpg");
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 767px) {
        .section-with-bg-image {
            background-size: auto;
        }
    }
</style>
