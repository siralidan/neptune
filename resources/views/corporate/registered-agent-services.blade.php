<x-app-layout>
  <main>
      <div class="">
          <div class="bg-image relative isolate px-6 lg:px-8">
              <div class="py-20 sm:py-40 lg:py-28">
                  <div class="">
                      <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                          Registered Agent Services
                      </h1>
                      <p class="font-bold text-center text-xs">
                          Home <span class="font-bold"> > </span>
                          <span class="text-yellow-600"> Registered Agent Services</span>
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
    "Registered Agent Services": `
    <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
        Registered Agent Services
    </p>
    <p class="text-xs">
        Don't sweat the regulations. Our registered agent services establish a solid legal foundation in different places, giving you a major edge.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Navigating Regulations with Registered Agent Services
    </p>
    <p class="text-xs">
        Welcome to a realm of regulatory ease and strategic advantage with our Registered Agent services. Say goodbye to the complexities of legal compliance and embrace a solid legal foundation that spans across different jurisdictions. At Neptune Fiduciaries, we're committed to empowering your business by ensuring that you're not just compliant but poised for success.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Why Opt for Registered Agent Services?
    </p>
    <p class="text-xs">
        Legal Compliance: Our registered agent services ensure that your business adheres to all regulatory requirements, minimizing the risk of penalties and legal setbacks. Credibility: Establish credibility and trust with stakeholders, clients, and partners by having a reliable registered agent representing your business. Continuous Presence: Stay informed and prepared at all times. Our registered agent maintains a continuous presence to receive important legal documents on your behalf. Strategic Advantage: With a solid legal foundation, you gain a competitive edge that allows you to focus on growth and strategic decision-making.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        How Our Registered Agent Services Work
    </p>
    <p class="text-xs">
        Global Reach: Our network of registered agents spans various jurisdictions, giving you the flexibility to operate seamlessly on an international scale. Timely Notifications: We ensure that you receive time-sensitive legal documents promptly, allowing you to respond in accordance with legal deadlines. Compliance Expertise: Rely on our expertise to navigate complex regulations and maintain compliance, enabling you to stay ahead of potential issues. Tailored Solutions: We understand that each business has unique needs. Our registered agent services are tailored to fit your specific industry and operational requirements.
    </p>
    <p class="text-xs font-bold text-purple-800 mt-4">
        Benefits Beyond Compliance
    </p>
    <p class="text-xs">
        Focus on Growth: Shift your focus from legal intricacies to growth initiatives, confident that your compliance matters are being expertly handled. Peace of Mind: With our registered agent services in place, you can rest assured that you won't miss critical legal notices or deadlines. Cross-Border Expansion: Seamlessly expand your business across borders, knowing that your legal obligations are being met in every jurisdiction. Ready to explore the transformative power of Registered Agent services? By choosing us, you're choosing more than just compliance – you're choosing a strategic advantage that propels your business forward. Get in touch with one of our experts to discover how Neptune Fiduciaries can help you navigate the regulatory landscape while giving you a major edge in the business world.
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
