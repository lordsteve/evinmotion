<x-layout :indicators="$indicators" title="What is EV?">
    <x-hero img="{{ asset('storage/images/JuiceStand_1.jpg') }}" size="S">
        What Is EV?
    </x-hero>
    <div class="subhero">
        <x-section name="EV Charging Station?">
            <h3>According to Wikipedia...</h3>
            <p>An electric vehicle charging station, also called EV charging station, electric recharging point, charging point, charge point, electronic charging station (ECS), and electric vehicle supply equipment (EVSE), is an element in an infrastructure that supplies electric energy for the recharging of plug-in electric vehicles—including electric cars, neighborhood electric vehicles, and plug-in hybrids.</p>
            <p>For charging at home or work, some electric vehicles have converters onboard that can plug into a standard electrical outlet or a high-capacity appliance outlet. Others either require or can use a charging station that provides electrical conversion, monitoring, or safety functionality. These stations are also needed when traveling, and many support faster charging at higher voltages and currents than are available from residential EVSEs. Public charging stations are typically on-street facilities provided by electric utility companies or located at retail shopping centers, restaurants, and parking places, operated by a range of private companies.</p>
        </x-section>
        <div class="img-box">
            <img src="{{ asset('storage/images/ChargingStation_Clear_021221.png') }}" width="250" />
        </div>
    </div>
    <x-hero img="{{ asset('storage/images/mercedes-benz-eqc-provided-331.jpg') }}">
        How long does it take to charge an EV?
    </x-hero>
    <div class="subhero">
        <x-section name="Enel X Standard">
            <p>The charging time depends on the charging power (load in kW of the charging station) of your <a href="{{ route('products') }}">products</a>, the maximum power accepted by the vehicle's charger, the type of cable used, and, of course, the capacity of the onboard storage system and the current charge level.</p>
            <p>Usually, a medium car with a 25 kWh battery takes:</p>
            <ul>
                <li>8 hours to charge at home (with an average power of 3 kW)</li>
                <li>2 hours to charge at faster-charging stations (with power between 7.4 and 22 kW)</li>
                <li>30 minutes to charge at even faster-charging stations (with power between 43 kW and 50 kW)</li>
            </ul>
        </x-section>
        <x-section name="Direct Current Charging">
            <p>Tesla Direct-current (DC) fast charging equipment (typically 208/480V AC three-phase input), enables rapid charging along heavy traffic corridors at installed stations. As of 2019, about 15% of charging outlets in the United States were DC fast chargers. There are three types of DC fast charging systems, depending on the type of charge port on the vehicle: SAE Combined Charging System (CCS), CHAdeMO, or Tesla.</p>

            <a href="https://afdc.energy.gov/">FIND OUT MORE ></a>
        </x-section>
    </div>
    <div class="divider">
        <h3>Where can I find a charging station?</h3>
        <p>Charging stations can be found and will be needed where there is on-street parking, at taxi stands, in parking lots (at places of employment, hotels, airports, shopping centers, convenience shops, fast food restaurants, coffeehouses, etc.), as well as in the workplaces, in driveways and garages at home. Existing filling stations may also incorporate charging stations. As of 2017, charging stations have been criticized for being inaccessible, hard to find, out of order, and slow; thus reducing EV expansion.[34] At the same time, more gas stations add EV charging stations to meet the increasing demand among EV drivers.[35] Worldwide, hotels are adopting a policy of providing their guests with electric car charging.</p>
    </div>
    <div class="subhero">
        <div class="img-box">
            <img src="{{ asset('storage/images/JuiceBox_Residential_Pedestal_1.jpg') }}" width="300" />
        </div>
        <div style="max-width: 600px;">
            <h2>Charging Equipment</h2>
            <p>Charging equipment for plug-in electric vehicles PEVs—which include plug-in hybrid electric vehicles (PHEVs) and all-electric vehicles (EVs)—is classified by the rate at which the batteries are charged. Charging times vary based on how depleted the battery is, how much energy it holds, the type of battery, and the type of charging equipment. The charging time can range from less than 20 minutes to 20 hours or more, depending on these factors. Charging the growing number of PEVs requires a robus network of stations for both consumer and fleets.</p>
            <p>For information on currently available EVSE models, see the Electric Drive Transportation Association's <a href="https://www.goelectricdrive.org/charging-ev/charging-equipment-showroom" target="_blank">GoElectricDrive website</a>, which includes information on charging networks and service providers. When <a href="https://afdc.energy.gov/fuels/electricity_infrastructure_development.html" target="_blank">choosing equipment</a> for a specific application, many factors, such as networking, payment capabilities, and <a href="https://afdc.energy.gov/fuels/electricity_infrastructure_maintenance_and_operation.html" target="_blank">operation and maintenance</a>, should be considered. For additional information on selecting the right charger, see the <a href="https://afdc.energy.gov/publications/search/keyword/?q=charger%20selection%20guide" target="_blank">California Energy Commission's (CEC) EV Charger Selection Guide</a>.</p>
        </div>
    </div>
    <div class="divider">
        <h2>DEVELOPING INFRASTRUCTURE TO CHARGE PLUG-IN ELECTRIC VEHICLES</h2>
        <p>Consumers and fleets considering plug-in electric vehicles (PEVS)—which include plug-in hybrid electric vehicles (PHEVs) and all-electric vehicles (EVs)—benefit from access to charging stations, also known as EVSE (electric vehicle supply equipment). For most drivers, this starts with <a href="https://afdc.energy.gov/fuels/electricity_charging_home.html" target="_blank">charging at home</a> or at fleet facilities. Charging stations at <a href="https://afdc.energy.gov/fuels/electricity_charging_workplace.html" target="_blank">workplaces</a> and <a href="https://afdc.energy.gov/fuels/electricity_charging_public.html" target="_blank">public destinations</a> may also bolster market acceptance. Community leaders can find out more about getting ready for PEVs from <a href="https://cleancities.energy.gov/partnerships/search?project_search=Electric+Vehicle+Community+Readiness" target="_blank">Clean Cities PEV vehicle community readiness projects</a> or through <a href="https://afdc.energy.gov/pev-readiness.html">PEV readiness planning</a>. The <a href="https://afdc.energy.gov/evi-pro-lite" target="_blank">EVI-Pro Lite tool</a> is also available to estimate the quantity and type of electric vehicle charging infrastructure necessary to support regional adoption of electric vehicles by state or city/urban area.</p>

        <p>The <a href="https://afdc.energy.gov/stations/#/find/nearest" target="_blank">Alternative Fueling Station Locator</a> allows users to search for public and private electric vehicle charging stations. Suggest new charging stations for inclusion in the Station Locator using the <a href="https://afdc.energy.gov/stations/#/station/new" target="_blank">Submit New Station</a> form.</p>
    </div>
    <div class="subhero">
        <x-section name="Level 1 Charging">
            <h3>2 to 5 miles of range per 1 hour of charging</h3>
            <p>J1772 charge port<br />
            <a href="https://afdc.energy.gov/glossary.html#AlternatingCurrent" target="_blank">Alternating Current (AC)</a> Level 1 equipment (often referred to simply as Level 1) provides charging through a 120 volt (V) AC plug. Most, if not all, PEVs will come with a Level 1 cordset, so no additional charging equipment is required. On one end of the cord is a standard <a href="https://afdc.energy.gov/fuels/electricity_infrastructure.html#" target="_blank">NEMA</a> connector, (for example, a NEMA 5-15, which is a common three-prong household plug) and on the other end is an SAE J1772 standard connector (often referred to simply as J1772, shown in the above image). The J1772 connector plugs in to the car's J1772 charge port, and the NEMA connector plugs in to a standard NEMA wall outlet.</p>

            <p>Level 1 charging is typically used when there is only a 120V outlet available, such as while charging at home, but can easily provide charging for all of a driver's needs. For example, 8 hours of charging at 120V can replenish about 40 miles of electric range for a mid-size PEV. As of 2019, <a href="https://afdc.energy.gov/stations/#/analyze?country=US&fuel=ELEC&ev_levels=all" target="_blank">less than 5% of public charging outlets in the United States were Level 1.</a></p>
        </x-section>
        <x-section name="Level 2 Charging">
            <h3>10 to 20 miles of range per 1 hour of charging</h3>
            <p>J1772 charge port<br />
            AC Level 2 equipment (often referred to simply as Level 2) offers to charge through 240V (typical in residential applications) or 208V (typical in commercial applications) electrical service. Most homes have 240V service available, and because Level 2 equipment can charge a typical PEV battery overnight, it is commonly installed at PEV owners' homes for <a href="https://afdc.energy.gov/fuels/electricity_charging_home.html" target="_blank">home charging</a>. Level 2 equipment is also commonly used for <a href="https://afdc.energy.gov/fuels/electricity_charging_public.html">public and workplace charging</a>. This charging option can operate at up to 80 amperes (Amp) and 19.2 kW. However, most residential Level 2 equipment operates at lower power. Many of these units operate at up to 30 Amps, delivering 7.2 kW of power. These units require a dedicated 40-Amp circuit. As of 2019, <a href="https://afdc.energy.gov/stations/#/analyze?country=US&fuel=ELEC&ev_levels=all">over 80% of public outlets in the United States were Level 2.</a></p>

            <p>Level 2 charging equipment uses the same J1772 connector and charge port that Level 1 equipment uses. All commercially available PEVs have the ability to charge using Level 1 and Level 2 charging equipment. Although Tesla vehicles do not have a J1772 charge port, Tesla does sell an adapter.</p>
        </x-section>
    </div>
</x-layout>