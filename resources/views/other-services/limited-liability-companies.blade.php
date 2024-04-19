<x-app-layout>
    <main>
        <div class="">
            <div class="bg-image relative isolate px-6 lg:px-8">
                <div class="py-20 sm:py-40 lg:py-28">
                    <div class="">
                        <h1 class="text-xl font-bold text-center items-center tracking-tight text-white sm:text-5xl">
                           Limited Liability Companies
                        </h1>
                        <p class="font-bold text-center text-xs">
                            Home <span class="font-bold"> > </span>
                            <span class="text-yellow-600"> Limited Liability Companies</span>
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
    "Czech Republic Joint Stock Company": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Joint Stock Company
    </p>
    <p class="text-xs">
      A Czech joint stock company (in Czech: “akciová společnost”) is a business entity with registered capital divided into shares of certain nominal value, as defined by the Act on Commercial Corporations. Shareholders are not liable for the company's obligations beyond their investment.
    </p>
    <p class="text-xs">
      Features of a Czech joint stock company include:
      <ul class="list-disc list-inside text-xs">
        <li>The minimum registered capital is CZK 2,000,000 (EUR 73,000).</li>
        <li>Established by at least one founder via notarial deed.</li>
        <li>Statutory bodies include General Meeting, Board of Directors, and Supervisory Board.</li>
        <li>Liability is limited to share ownership.</li>
        <li>Annual accounts must be audited if certain conditions are met.</li>
        <li>Corporate tax rate is 19%.</li>
      </ul>
    </p>
    <p class="text-xs">
      Advantages of a joint stock company:
      <ul class="list-disc list-inside text-xs">
        <li>Shares can be publicly traded on the stock exchange.</li>
        <li>Flexible transfer of ownership through share transfer.</li>
        <li>Shareholders are not personally liable for company debts.</li>
      </ul>
    </p>
    <p class="text-xs">
      After founding, statutory body members must obtain a trade license unless the company's activities are limited to property management. The fee for obtaining a trade license is CZK 1,000 (EUR 40).
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Czech Republic Limited Liability Company (LLC)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Czech Republic Limited Liability Company (LLC)
    </p>
    <p class="text-xs">
      A Czech limited liability company (in Czech: “společnost s ručením omezeným”) is the most common type of business entity in the Czech Republic. It is a corporation whose registered capital is made up of members' investment contributions, and members are liable for the company's obligations only up to their contributed amount.
    </p>
    <p class="text-xs">
      Features of a Czech limited liability company include:
      <ul class="list-disc list-inside text-xs">
        <li>Can be founded by a sole founder, legal entity, or natural person.</li>
        <li>Maximum of 50 members; no shares issued, each member holds an "ownership interest".</li>
        <li>Two statutory bodies: General Meeting and Executives, and one voluntary organ: Supervisory Board.</li>
        <li>Standard corporate tax rate is 19%.</li>
        <li>Minimum issued share capital is 1 euro.</li>
        <li>No resident manager/director required.</li>
        <li>Minimum number of shareholders is 1.</li>
      </ul>
    </p>
    <p class="text-xs">
      The main advantages of a limited liability company are:
      <ul class="list-disc list-inside text-xs">
        <li>Fewer regulations compared to a joint-stock company.</li>
        <li>Less registered capital and reserve fund required.</li>
        <li>Can have one sole owner, either an individual or a legal entity.</li>
        <li>Requires only a Memorandum of Association.</li>
        <li>Does not require a Supervisory Board in most cases.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Estonia Limited Partnership": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Limited Partnership
    </p>
    <p class="text-xs">
      A limited partnership in Estonia is a company where two or more persons operate under a common business name. At least one person (the general partner) is liable for the partnership's obligations with all of their assets, while at least one person (the limited partner) is liable only to the extent of their contribution.
    </p>
    <p class="text-xs">
      Key features and legal requirements of an Estonian limited partnership include:
      <ul class="list-disc list-inside text-xs">
        <li>General partner liable for partnership obligations with all assets.</li>
        <li>Limited partner liable only to the extent of their contribution.</li>
        <li>Limited partner does not have the right to manage or represent the partnership.</li>
        <li>Limited partner who has paid their contribution in full is not liable for partnership obligations and is entitled to corresponding profits.</li>
        <li>Must have a registered office in Estonia.</li>
        <li>No minimum paid-up share capital.</li>
        <li>Usual authorized share capital is USD $50,000.</li>
        <li>Minimum number of directors/partners is two.</li>
        <li>One of the directors/partners (general partner) should be local.</li>
        <li>Records should be publicly accessible, although limited partner details are confidential.</li>
        <li>Not subject to income tax, withholding tax, or other taxes on assets or income originating outside of Estonia.</li>
        <li>Duration to set up is around 2 weeks.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Estonia Private Limited Company (LLC)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Private Limited Company (LLC)
    </p>
    <p class="text-xs">
      A private limited company in Estonia is a company whose share capital is divided into private limited company shares. Shareholders are not personally liable for the company's obligations, and the company is liable for its obligations with all of its assets.
    </p>
    <p class="text-xs">
      Key features and legal requirements of an Estonian private limited company include:
      <ul class="list-disc list-inside text-xs">
        <li>Either a resident or non-resident can be the founder of the company.</li>
        <li>Possible to obtain Electronic Citizenship in Estonia.</li>
        <li>The General Meeting is held to make decisions on company matters, such as approving annual reports.</li>
        <li>The nominal value of a share is not less than 1 EUR.</li>
        <li>Minimum authorized capital is 2,500 EUR.</li>
        <li>Company profits can be paid to shareholders once a year as dividends.</li>
        <li>Must have a registered office in Estonia.</li>
        <li>Minimum number of directors is one.</li>
        <li>Corporate taxation is low, between 20 – 24% depending on activity.</li>
        <li>Duration for setup is 1-3 days.</li>
      </ul>
    </p>
    <p class="text-xs">
      Key benefits of an Estonian private limited company include:
      <ul class="list-disc list-inside text-xs">
        <li>Low corporate taxation between 20 – 24%.</li>
        <li>Legal security with tax model following OECD and BEPS requirements.</li>
        <li>Multiple DTA agreements in place or planned with most European jurisdictions.</li>
        <li>Special holding entities available for important international company participations.</li>
        <li>Special agreements with the Schengen area offering visa benefits.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Estonia Public Limited Company": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Estonia Public Limited Company
    </p>
    <p class="text-xs">
      Estonia’s economy has seen significant growth in recent years, attracting foreign investment and creating a favorable environment for the international business community. However, investors considering establishing a company in Estonia should seek professional advice on legal, financial, and tax matters.
    </p>
    <p class="text-xs">
      Key features and legal requirements of a public limited company in Estonia include:
      <ul class="list-disc list-inside text-xs">
        <li>Must have a registered office in Estonia.</li>
        <li>Company establishment time is 1-2 days.</li>
        <li>Corporate tax rate is 24%.</li>
        <li>Minimum paid-up capital is €2,550.</li>
        <li>Usual authorized capital is €25,500.</li>
        <li>Minimum number of directors is one.</li>
        <li>No residency requirements for directors.</li>
        <li>Minimum number of shareholders is one.</li>
      </ul>
    </p>
    <p class="text-xs">
      Benefits of a public limited company in Estonia include:
      <ul class="list-disc list-inside text-xs">
        <li>Political stability as a democratic and peaceful state, with membership in the EU, WTO, and NATO.</li>
        <li>Economic stability with welcoming policies for foreign investment and a favorable flat tax system.</li>
        <li>Strategic location at the crossroads of Eastern Europe, Russia, and Scandinavia.</li>
        <li>Low corporate and personal income taxes, no tax on undistributed profits, and favorable withholding taxes.</li>
        <li>Investment in telecommunications infrastructure.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Gibraltar Limited Liability Company (LLC)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Gibraltar Limited Liability Company (LLC)
    </p>
    <p class="text-xs">
      A Gibraltar LLC combines features of both a partnership and a corporate structure, offering exceptional asset protection and confidentiality regulations for privacy and security. Members and managers of the LLC are protected from personal liability for company debts, similar to shareholders in a corporation.
    </p>
    <p class="text-xs">
      Key features and legal requirements of a Gibraltar LLC include:
      <ul class="list-disc list-inside text-xs">
        <li>Requires a registered office in Gibraltar.</li>
        <li>Minimum paid-up capital is GBP 100.</li>
        <li>Minimum number of directors is one with no residency requirements.</li>
        <li>Corporate directorship is allowed.</li>
        <li>Local and qualified secretary is required.</li>
        <li>No audit requirements for accounts.</li>
        <li>Required to file annual returns.</li>
        <li>Corporate tax is 10%.</li>
        <li>Duration to set up is one week.</li>
      </ul>
    </p>
    <p class="text-xs">
      Advantages of a Gibraltar LLC include:
      <ul class="list-disc list-inside text-xs">
        <li>No taxes.</li>
        <li>Complete privacy.</li>
        <li>Separate legal entity.</li>
        <li>Control over fiduciary duties.</li>
        <li>Flexibility in managing affairs and manner of merging or conversion.</li>
        <li>Formation requires only one member.</li>
        <li>Easy and low-cost registration.</li>
        <li>No minimum authorized capital.</li>
        <li>English is the official language.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Guernsey Limited Partnership": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Guernsey Limited Partnership
    </p>
    <p class="text-xs">
      A Guernsey Limited Partnership (LP) comprises one or more general partners who are jointly and severally liable for all the debts of the partnership, and one or more limited partners who have limited liability, akin to shareholders in a corporation. Limited partners are only liable for debts to the extent of their registered investment and have no management authority.
    </p>
    <p class="text-xs">
      Key features of a Guernsey Limited Partnership include:
      <ul class="list-disc list-inside text-xs">
        <li>A person may be both a general partner and a limited partner.</li>
        <li>An LP may be formed for any lawful business within or outside Guernsey.</li>
        <li>Every LP shall have a registered office in Guernsey.</li>
        <li>Partnership affairs and business conduct are governed by a written partnership agreement.</li>
        <li>Limited partners cannot participate in business management or bind the partnership.</li>
        <li>General partners' acts bind the partnership, and they are jointly liable for partnership debts.</li>
        <li>Legal personality can be conferred upon the LP by election at registration.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Irish Limited Liability Partnership (LLP)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Irish Limited Liability Partnership (LLP)
    </p>
    <p class="text-xs">
      An Irish Limited Liability Partnership (LLP) allows for a business structure where some members have limited liability for the firm's debts, limited to the extent of their contribution. However, like a general partnership, an LLP is not a separate legal entity.
    </p>
    <p class="text-xs">
      Key features of an Irish LLP include:
      <ul class="list-disc list-inside text-xs">
        <li>An LLP must have at least one general partner and one limited partner.</li>
        <li>The general partner is liable for all debts and obligations of the firm, while the limited partner's liability is limited to their contributed capital.</li>
        <li>The limited partner cannot be involved in the management of the firm and has no authority to bind other partners.</li>
        <li>An LLP must submit accounts and annual returns to the Registrar of Companies each year.</li>
        <li>An LLP is not a separate legal entity.</li>
      </ul>
    </p>
    <p class="text-xs">
      Steps to register a limited partnership in Ireland:
      <ul class="list-disc list-inside text-xs">
        <li>Register the partnership name at the Companies Registration Office (CRO).</li>
        <li>Fill and submit application Form LP1, signed by both the general and limited partners.</li>
        <li>Fill Form LP3, including a statement of capital contributed by the partners, signed by any general partner.</li>
        <li>Sign a deed by all partners, detailing partnership specifics.</li>
        <li>Pay the registration fees to complete the process.</li>
      </ul>
    </p>
    <p class="text-xs">
      Advantages of an LLP include:
      <ul class="list-disc list-inside text-xs">
        <li>Limits potential legal liability, balancing management control with reduced liability exposure.</li>
        <li>Allows for flexible roles for partners.</li>
        <li>Provides for relative ease of formation.</li>
        <li>Offers possible pass-through tax relief.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Irish Public Limited Company (PLC)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Irish Public Limited Company (PLC)
    </p>
    <p class="text-xs">
      A Public Limited Company (PLC) in Ireland is typically established for seeking a listing on the Stock Exchange or for major business expansion schemes. Unlike private limited companies, there is no restriction on the number of shareholders in a PLC. It must have a minimum of two directors and cannot dispense with the holding of an Annual General Meeting (AGM). The minimum issued share capital for a PLC is €25,000, and its name must end with the suffix 'Public Limited Company' or 'PLC'.
    </p>
    <p class="text-xs">
      Features of a PLC in Ireland include:
      <ul class="list-disc list-inside text-xs">
        <li>A minimum of seven members.</li>
        <li>Freely transferable stocks.</li>
        <li>Minimum nominal share capital of €25,000.</li>
        <li>Unrestricted maximum number of members.</li>
        <li>Members' liability limited to their investment in the company.</li>
      </ul>
    </p>
    <p class="text-xs">
      Requirements for forming a PLC in Ireland include:
      <ul class="list-disc list-inside text-xs">
        <li>Company name</li>
        <li>Constitution</li>
        <li>Registered office</li>
        <li>Directors</li>
        <li>Company secretary</li>
        <li>Authorized and issued share capital</li>
        <li>Details of shareholders</li>
      </ul>
    </p>
    <p class="text-xs">
      Post-incorporation compliance requirements for a PLC include:
      <ul class="list-disc list-inside text-xs">
        <li>Annual return filing</li>
        <li>Maintenance of statutory registers</li>
        <li>Tax returns</li>
        <li>Annual General Meeting (AGM)</li>
        <li>Accounts preparation and filing</li>
      </ul>
    </p>
    <p class="text-xs">
      Advantages of establishing a PLC in Ireland:
      <ul class="list-disc list-inside text-xs">
        <li>Limited liability protection</li>
        <li>Separate legal entity status</li>
        <li>Protection of personal assets</li>
        <li>Company name protection</li>
        <li>Defined and protected shareholders' rights</li>
        <li>Flexible borrowing powers</li>
        <li>Potential tax advantages</li>
        <li>Access to company pension schemes</li>
        <li>Enhanced business image and credibility</li>
        <li>Continued existence despite changes in management or shareholders</li>
        <li>Spread of ownership over multiple shareholders</li>
        <li>Low corporate tax rate of 12.5% in Ireland</li>
        <li>Exemption from corporation tax for the first 3 years of trading</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Malta Private Limited Liability Company": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Malta Private Limited Liability Company
    </p>
    <p class="text-xs">
      Malta offers clients the option of establishing a private exempt LLC, allowing for single-member ownership of a company. Renowned for its highly reputable jurisdiction, Malta boasts a low corporate tax system that attracts many businesses due to its modern infrastructure, EU-conforming legislation, and excellent banking facilities. Many companies benefit from the tax imputation system, which offers rebates and credits, enabling effective management of corporate taxes.
    </p>
    <p class="text-xs">
      Features and Legal Requirements:
      <ul class="list-disc list-inside text-xs">
        <li>Governed by Companies Act 1995.</li>
        <li>Requires a Registered Office in Malta.</li>
        <li>Establishment time: 1-2 business days.</li>
        <li>Minimum government fees (excluding taxation): €245.</li>
        <li>Minimum paid-up share capital: €250.</li>
        <li>Usual authorized share capital: €1,165.</li>
        <li>Minimum number of directors: one.</li>
        <li>No residency requirements for directors.</li>
        <li>Minimum number of shareholders: two, with the possibility of one.</li>
        <li>Subject to audit requirements.</li>
        <li>Required to file accounts.</li>
      </ul>
    </p>
    <p class="text-xs">
      Advantages of LLC:
      <ul class="list-disc list-inside text-xs">
        <li>Single-member ownership available.</li>
        <li>Re-domiciliation allowances.</li>
        <li>Corporate tax benefits.</li>
        <li>Nominee service availability.</li>
        <li>Asset security.</li>
        <li>Malta is not typically associated with offshore jurisdictions.</li>
        <li>Nonresident companies enjoy many of the same benefits as resident companies.</li>
        <li>Malta is a signatory to over 70 Double Tax Treaties agreements.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Netherlands Holding Company": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Netherlands Holding Company
    </p>
    <p class="text-xs">
      A holding company in the Netherlands is a legal entity established not for the purpose of providing goods and services, but for holding shares in other companies. Its primary function is to collect dividends through the holding company. This entity, governed by Dutch legislation, offers flexibility and advantages for single investors or multiple partners, even if engaged in different activities, serving as a shared tax vehicle.
    </p>
    <p class="text-xs">
      Types of Dutch Holding Companies:
      <ul class="list-disc list-inside text-xs">
        <li>Limited liability companies</li>
        <li>Partnerships</li>
        <li>Foundations</li>
        <li>Cooperatives</li>
      </ul>
    </p>
    <p class="text-xs">
      Features of a Dutch Holding Company:
      <ul class="list-disc list-inside text-xs">
        <li>Minimum share capital: 1 euro.</li>
        <li>Optimal for tax planning.</li>
        <li>Requires a registered office in the Netherlands.</li>
        <li>Minimum number of directors: one.</li>
        <li>A company secretary is required.</li>
        <li>Setup duration: 3 weeks.</li>
      </ul>
    </p>
    <p class="text-xs">
      Taxation Principles:
      <ul class="list-disc list-inside text-xs">
        <li>Participation exemption: Qualifying holdings may be tax exempt.</li>
        <li>Tax reduction: Expenses related to subsidiaries are generally deductible.</li>
        <li>No substance requirements: No need for employees.</li>
        <li>No withholding tax rate on dividends from EU subsidiaries.</li>
        <li>No currency exchange restrictions.</li>
      </ul>
    </p>
    <p class="text-xs">
      Benefits of a Dutch Holding Company:
      <ul class="list-disc list-inside text-xs">
        <li>Separate legal entity.</li>
        <li>Inexpensive corporate bank account setup.</li>
        <li>Limited liability protects members.</li>
        <li>No currency restrictions or auditing requirements.</li>
        <li>No withholding tax on dividends in most cases.</li>
        <li>No capital gains tax on share sale.</li>
        <li>Business-friendly legal framework.</li>
        <li>Cost is moderate.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Switzerland Joint Stock Company": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Switzerland Joint Stock Company
    </p>
    <p class="text-xs">
      Joint stock companies in Switzerland are business entities where shareholders purchase and incorporate different stocks. Commonly known as Aktiengesellschaft (AG), the Swiss joint stock company is favored by foreign investors seeking to establish medium-sized or large corporations. Its greatest advantage lies in providing limited liability to Swiss shareholders concerning the company’s assets. A Swiss joint stock company can engage in various business activities, including manufacturing, trading, financial services, and can serve as a Swiss holding company or a subsidiary of a foreign entity.
    </p>
    <p class="text-xs">
      Requirements and Features:
      <ul class="list-disc list-inside text-xs">
        <li>Minimum share capital: 100,000 CHF, with 20% paid-up before registration.</li>
        <li>At least one shareholder required.</li>
        <li>Board must have at least one Swiss resident member.</li>
        <li>Can be registered by a single owner.</li>
        <li>Financial statements subject to audit requirement.</li>
        <li>Minimum three directors, one must be a resident.</li>
        <li>Corporate directorship not allowed.</li>
        <li>Corporate shareholders permitted.</li>
        <li>Setup duration: around 3 weeks.</li>
        <li>Statutory audit required.</li>
        <li>Corporate tax rate: between 12.5% and 24%.</li>
        <li>Can rent a local office.</li>
        <li>Taxation of dividends and interests subject to deductions due to double taxation agreements.</li>
      </ul>
    </p>
    <p class="text-xs">
      Advantages:
      <ul class="list-disc list-inside text-xs">
        <li>Limited liability for shareholders.</li>
        <li>Shareholders can remain anonymous.</li>
        <li>Audited accounts need to be published only if listed on the Stock Exchange.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
    </p>
  </div>
`
,
"Switzerland Limited Liability Company (SARL) / (LLC)": `
  <div class="p-4">
    <p class="text-lg font-bold text-purple-800 mb-4">
      Switzerland Limited Liability Company (SARL) / (LLC)
    </p>
    <p class="text-xs">
      A Switzerland Limited Liability Company (SARL) / (LLC) is a business entity whose liability is limited to the contributions of its members. Known as “Société à Responsabilité Limitée” (SARL) or “Gesellschaft mit beschränkter Haftung” (GmbH) in German, it is a private limited liability corporation governed by the Civil Code of Switzerland. Each of the 26 cantons registers businesses within its jurisdiction, as Switzerland lacks a centralized federal registration system.
    </p>
    <p class="text-xs">
      Features:
      <ul class="list-disc list-inside text-xs">
        <li>Minimum capital required: CHF 20,000.</li>
        <li>At least one shareholder is mandatory.</li>
        <li>One executive director must have domicile in Switzerland.</li>
        <li>Foreigners can own 100% of shares.</li>
        <li>Company name must include “GmbH”.</li>
        <li>Shareholders’ liabilities limited to share contributions.</li>
        <li>Minimum one director required; no Board of Directors necessary.</li>
        <li>Office in Switzerland and local registered agent required.</li>
        <li>Annual general meetings required for shareholders.</li>
        <li>Setup timeframe: 3 to 5 working days.</li>
        <li>Corporate tax rates vary by province, between 12.5% and 24%.</li>
      </ul>
    </p>
    <p class="text-xs">
      Steps to Setup:
      <ul class="list-disc list-inside text-xs">
        <li>Create an Escrow Account for Paid-Up Capital.</li>
        <li>Draft Registration Paperwork in front of the Notary.</li>
        <li>File Completed Application with the Local Commercial Register.</li>
        <li>Register for VAT and enroll employees in National Social Insurance Program.</li>
      </ul>
    </p>
    <p class="text-xs">
      Documents Required:
      <ul class="list-disc list-inside text-xs">
        <li>Company Name ending with “GmbH”.</li>
        <li>Passport color scan copy (director(s), shareholder(s)).</li>
        <li>Proof of residence (phone bill, electricity bill).</li>
        <li>Bank reference letter or 3-month bank statement.</li>
        <li>Nature of business and Business plan.</li>
        <li>Details of company owner.</li>
        <li>Draft copy of the Articles of Association.</li>
      </ul>
    </p>
    <p class="text-xs">
      Benefits:
      <ul class="list-disc list-inside text-xs">
        <li>Total Foreign Ownership.</li>
        <li>Limited Liability for Shareholders.</li>
        <li>Single Shareholder and Director required.</li>
        <li>Total Control for the Shareholder.</li>
      </ul>
    </p>
    <p class="text-xs">
      For more information, please feel free to contact Camitrade Investment on <a href="mailto:info@camitrade.com">info@camitrade.com</a> or <a href="mailto:sales@camitrade.com">sales@camitrade.com</a>.
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
  