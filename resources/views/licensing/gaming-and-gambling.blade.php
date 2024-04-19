<x-app-layout>
  <main>
      <div class="">
          <div class="bg-image relative isolate px-6 lg:px-8">
              <div class="py-20 sm:py-40 lg:py-28">
                  <div class="">
                      <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                        Gaming And Gambling
                      </h1>
                      <p class="font-bold text-center text-xs">
                          Home <span class="font-bold"> > </span>
                          <span class="text-yellow-600">Gaming And Gambling</span>
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
    "Malta Gaming License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Malta Gaming License
    </p>
    <p class="text-xs">
        The Malta Gaming Authority (MGA) was created to regulate all forms of gaming in Malta, including remote gaming operations. In April 2004, the Regulations were published, making Malta the first EU member state to regulate remote gaming.
    </p>
    <p class="text-xs">
        The Regulations are divided into four classes depending on which type of operation companies fall under and include licenses for Business to Consumers (B2C) operators as well as Business to Business (B2B) operators.
    </p>
    <p class="text-xs">
        The remote gaming regime applied by the MGA is both technology- and game-neutral, therefore encompassing any type of gaming offered by means of distance communication (including, but not limited to, internet, digital TV, mobile phone technology and telephony). Any game offered by means of distance communication, which can be securely managed and is compliant with the Regulations, will be reviewed and considered for licensing by the MGA.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Features
    </p>
    <ul class="list-disc list-inside text-xs">
        <li>Corporate vehicle permitted is a company or limited partnership</li>
        <li>Local physical office is required</li>
        <li>Minimum paid-up capital is €100,000 (Class 1 & 2) and €40,000 (Class 3 & 4)</li>
        <li>Minimum number of directors is two</li>
        <li>No local director required</li>
        <li>Minimum number of shareholders is two</li>
        <li>Company Secretary is required</li>
        <li>Corporate income tax is 35%.</li>
        <li>Duration to Set Up is about two months</li>
    </ul>
    <p class="text-xs">
        Licenses are granted for a period of five years and licensees must have the core part of Our online operation physically located in Malta.
    </p>
    <p class="text-xs">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
    </p>
</div>



    `,
    "Isle of Man Gaming License": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Isle of Man Gaming License
    </p>
    <p class="text-xs">
        The Isle of Man has a world-class reputation as an e-Gaming jurisdiction whose priority is:
    </p>
    <ul class="list-disc list-inside text-xs">
        <li>Keeping gambling crime free</li>
        <li>Protecting the young and vulnerable</li>
        <li>Ensuring that the facilities offered by licensed operators are fair and that players receive Our true winnings</li>
    </ul>
    <p class="text-xs">
        To comply with the requirements of OGRA, Operators in the Isle of Man must:
    </p>
    <ul class="list-disc list-inside text-xs">
        <li>Establish an Isle of Man Company</li>
        <li>Have at least 2 local Directors, who must be individuals not corporate entities</li>
        <li>Appoint at least one resident Designated Official (DO), or where that Designated Official cannot reside in the Isle of Man, an Operations Manager (OM)</li>
        <li>Either register players on Isle of Man servers or operate under a Network Services License which obliges them to establish the network services in the Isle of Man</li>
        <li>Locate gambling and trading accounts in a GSC recognized Bank</li>
    </ul>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Advantages of obtaining an Isle of Man E-gaming license
    </p>
    <ul class="list-disc list-inside text-xs">
        <li>Low betting duty of between 1.5% and 0.1%, on gross profit</li>
        <li>World-class infrastructure, bandwidth, and power resilience coupled with excellent data hosting facilities</li>
        <li>An extensive clustering of service providers / advisors and peripheral activities such as marketing, software, and IT providers with experience in e-Gaming business on your doorstep</li>
        <li>Supportive legislation making the Isle of Man an ideal location for disaster recovery</li>
        <li>Consumer-focused regulation and player protection</li>
        <li>A simple application process typically 10 -12 weeks</li>
        <li>A qualified workforce</li>
        <li>Political stability</li>
        <li>OECD Whitelisted and member of the World Trade Organization</li>
        <li>No need for a Fiscal Representative in the UK</li>
        <li>Double Duty Relief for eligible EU member states</li>
        <li>Financial assistance for startups and relocations</li>
    </ul>
    <p class="text-xs">
        For more information, please feel free to contact Neptune Fiduciaries on <a href="mailto:info@neptunecorporate.com">info@neptunecorporate.com</a> or <a href="mailto:sales@neptunecorporate.com">sales@neptunecorporate.com</a>.
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
