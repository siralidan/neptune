<x-app-layout>
  <main>
      <div class="">
          <div class="bg-image relative isolate px-6 lg:px-8">
              <div class="py-20 sm:py-40 lg:py-28">
                  <div class="">
                      <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                          Nominee Director and Shareholder Access
                      </h1>
                      <p class="font-bold text-center text-xs">
                          Home <span class="font-bold"> > </span>
                          <span class="text-yellow-600"> Nominee Director and Shareholder Access</span>
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
    "Nominee Director and Shareholder Access": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Nominee Director and Shareholder Access
    </p>
    <p class="text-xs">
        Move ahead with strategic brilliance. Our nominee director and shareholder services keep you compliant and boost your strategic moves.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Nominee Director and Shareholder Services
    </p>
    <p class="text-xs">
        Welcome to a realm of strategic excellence and compliance assurance through our Nominee Director and Shareholder services. At Neptune Fiduciaries, we recognize the importance of navigating the business landscape with astuteness. Our services are meticulously designed to empower you to move forward strategically while ensuring compliance at every step. With our expert guidance, you'll be poised to make impactful decisions that drive your business toward success.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Why Opt for Nominee Director and Shareholder Services?
    </p>
    <p class="text-xs">
        Strategic Advantage: Our services offer you a strategic edge by enabling you to focus on core business activities while our nominee director and shareholder take care of legal and administrative requirements. Compliance Confidence: Stay ahead of evolving regulations and legal obligations. Our experts ensure that your business remains fully compliant, mitigating potential risks. Privacy and Confidentiality: Maintain privacy in your business affairs with the use of nominee services, allowing you to operate discreetly in today's interconnected world. Enhanced Decision-Making: Empower your decision-making process by leveraging the expertise of our nominee director and shareholder to navigate complex business decisions.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        How Our Services Work
    </p>
    <p class="text-xs">
        Strategic Alignment: We work closely with you to understand your business goals and tailor our nominee services to align with your strategic direction. Experienced Professionals: Our nominee directors and shareholders are seasoned professionals with in-depth industry knowledge, ensuring your decisions are well-informed. Compliance Assurance: We ensure that your business adheres to all legal and regulatory requirements, mitigating potential penalties and legal hurdles. Ongoing Support: Beyond initial setup, we provide ongoing support to help you navigate the challenges of business operations and decision-making.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Benefits Beyond Compliance
    </p>
    <p class="text-xs">
        Focused Strategy: Shift your focus from administrative tasks to strategic planning, leveraging the expertise of our nominee director and shareholder. Risk Mitigation: Reduce legal and regulatory risks by having experienced professionals manage compliance on your behalf. Confidence in Decisions: Make critical business decisions with confidence, knowing that you have expert guidance and support at your side.
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
