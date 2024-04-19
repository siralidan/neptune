<x-app-layout>
    <main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                           Aircraft and Shipping Registration
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600"> Aircraft and Shipping Registration</span>
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
    "Estonia Aircraft Registration": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Aircraft Registration
    </p>
    <p class="text-xs">
      An application by the owner of aircraft or by a person authorized by the owner for the registration of aircraft, for the amendment of entries in the register, or for the deletion of aircraft from the register together with the required documents shall be submitted to the Technical Department of Estonian Civil Aviation Administration (ECAA). The application must be signed by the owner of the aircraft or a person authorized by the owner.
    </p>
    <p class="text-xs">
      <span class="font-bold">Key Features</span><br>
      The owner or operator of the aircraft shall be:<br>
      - An Estonian citizen<br>
      - A person holding a long-term residence permit or the right of permanent residence in Estonia<br>
      - A legal person registered in Estonia<br>
      - A local authority<br>
      - The Estonian state<br>
      The aircraft must have:<br>
      - A permit to fly<br>
      - A certificate of airworthiness issued in Estonia or a certificate of airworthiness issued by the competent authority of another state and recognized in Estonia<br>
      An aircraft that does not have a valid certificate of airworthiness or a permit to fly shall be entered in the aircraft register temporarily for up to three months.<br>
      Aircraft that has been entered in the register of another state shall not be entered in the Estonian aircraft register.
    </p>
    <p class="text-xs">
      <span class="font-bold">Registration Processing of the Application</span><br>
      The application shall be registered, and all the attached documents shall be reviewed within 30 working days from the submission of all the required documents. The Technical Department of ECAA, together with the Legal Department, assesses the application and the attached documents and checks Our compliance with the applicable requirements. The applicant shall be contacted in case of any missing or insufficient information or document.<br>
      A certificate of registration of aircraft or temporary certificate of registration of aircraft shall be issued to the applicant against signature or sent by mail when required.<br>
      A certificate of deletion of an aircraft from the register shall be issued to the owner or shall be sent to the civil aviation authority of the intended State of Registration.
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment at <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Estonia Ship Registration": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Ship Registration
    </p>
    <p class="text-xs">
      The Ship Register holds data about the Estonian marine and inland vessels (incl. fishing vessels), non-propelled floating vessels, and vessels being in construction. In addition to the vessel’s technical data, the registry stores data about the vessel’s owners, ship mortgages, usufructs and prohibition notations, and other restrictions regarding the vessels. The data in the Ship Register have legal force. Any transaction made with a registered vessel enters into force only after the transaction has been entered into the Ship Register.
    </p>
    <p class="text-xs">
      The Ship Register is kept by the registry departments of the Harju County Court, the Tartu County Court, and the Pärnu County Court. The Harju County Court also keeps the Ship Register for the jurisdiction of the Viru County Court. The Ship Register is kept in an electronic form.
    </p>
    <p class="text-xs">
      Upon registration of a ship, a citizen of a Member State of the European Union and a company or other legal person in private law founded pursuant to the law of a Member State of the European Union whose seat and business establishment is in a Member State of the European Union shall, upon request, be equal to the owner, co-owner, or co-successor of a seagoing vessel specified in 1 and 2 of this Act, provided that the person has:
    </p>
    <ul class="text-xs list-disc ml-4">
      <li>A residence or a permanent business establishment in Estonia, and the ship herself is not deemed to be a business establishment,</li>
      <li>A permanent representative whose residence or seat is in Estonia and who is responsible for compliance with the technical, social, and administrative requirements established with regard to seagoing vessels in Estonia and who directly controls and monitors the use of the ship.</li>
    </ul>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment at <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Estonia Trademark Registration": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Trademark Registration
    </p>
    <p class="text-xs">
      Legal basis is the Trademark Act of October 1st, 1992, last redaction entered into force January 1, 2012. Trademark protection is obtained by registration.
    </p>
    <p class="text-xs">
      <span class="font-bold">Key Features</span><br>
      A trademark application has to be filed before the Patent Office by a local agent.<br>
      A non-legalized power of attorney is sufficient.<br>
      Foreign applicants do not need a domestic registration.<br>
      A trademark registration in Estonia is valid for 10 years and starts with the registration date. The registration is renewable for periods of 10 years.<br>
      If the trademark has not been used within 5 years from registration or has not been used later for a continuous period of 5 years, it may be subject to cancellation.
    </p>
    <p class="text-xs">
      <span class="font-bold">Documents to be Filed in the Application for Registration of a Trademark:</span><br>
      - A request for the registration of a trademark (Trade Mark Registration Application Form);<br>
      - An authorization document or reference to an authorization document submitted earlier if the applicant has a representative;<br>
      - Documents certifying priority if priority is claimed;<br>
      - Information concerning payment of the state fee;<br>
      - Regulations of the collective mark or guarantee mark if the application is filed for the registration of a collective mark or guarantee mark.
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment at <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Gibraltar Ship Registration": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Ship Registration
    </p>
    <p class="text-xs">
      The Gibraltar Yacht Registry is an internationally recognized, high-quality registry providing an efficient and cost-effective service, making it an ideal choice for yacht owners who want the confidence of belonging to a British Register and flying the Red Ensign.
    </p>
    <p class="text-xs">
      Gibraltar’s key location at the entrance of the Mediterranean Sea and its quality Ship Register has made it an important commercial and maritime center. With Gibraltar being a common law jurisdiction as well, it is a very attractive jurisdiction for those considering the registration of Our vessel. It has a separate register for commercial and pleasure vessels, however, there is no size limit for pleasure vessels.
    </p>
    <p class="text-xs">
      <span class="font-bold">Benefits</span><br>
      Gibraltar is bound by all international conventions and agreements in relation to shipping and safety, which have been ratified by the United Kingdom, giving vessels registered in Gibraltar the same status as that of any other British registry.<br>
      Changes in Gibraltar legislation now permit a wider range of individuals or corporate bodies to be qualified persons eligible to own a registerable ship.<br>
      The GSR currently offers three types of registration: full registration; bareboat registration; and registration under construction.<br>
      Generally, the GSR only accepts ships that are under 20 years of age. However, ships over 20 years may also be registered subject to a pre-registration survey.<br>
      Full Registrations are valid for five years, bareboat registrations for up to two years and are all renewable.<br>
      One special feature of the Gibraltar Register is the strict security for mortgagees since no ship will be de-registered without the mortgage being discharged first or without the mortgagees’ consent.<br>
      In order to register on Gibraltar’s ship registry, owners must be British Citizens, British Dependent Territories citizens, British Overseas citizens, or EU or EEA nationals or companies registered within the EU or EEA, and have a majority interest in the vessel’s ownership.
    </p>
    <p class="text-xs">
      <span class="font-bold">Benefits (Continued)</span><br>
      The yacht will fly the defaced British flag (Red Ensign) together with the international recognition, protection, and prestige that comes with it.<br>
      The ability to seek assistance from any of the British embassies and consulates worldwide where the vessel may be situated.<br>
      Legal title of yacht ownership on registration or transfer of ownership is straightforward.<br>
      All vital details concerning the yacht are contained in the Register and in the Certificate of British Registry (‘Blue Book’).<br>
      The Register is a public record, open to inspection by interested third parties, such as buyers and/or potential lenders, offering security as to title.<br>
      The Register enables the owner to dispose of the yacht easily in a cost-effective and timely manner.<br>
      All legal mortgages are required to be registered, enabling interested parties to ascertain from this public record whether a yacht is free from encumbrances or registered liens.
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment at <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
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
  