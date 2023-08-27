<x-layout :indicators="$indicators">
    <x-hero img="{{ asset('images/JuiceStand_1.jpg') }}" size="S">
        What Is EV?
    </x-hero>
    <div class="subhero">
        <x-section name="EV Charging Station?">
            <h3>According to Wikipedia...</h3>
            <p>An electric vehicle charging station, also called EV charging station, electric recharging point, charging point, charge point, electronic charging station (ECS), and electric vehicle supply equipment (EVSE), is an element in an infrastructure that supplies electric energy for the recharging of plug-in electric vehicles—including electric cars, neighborhood electric vehicles, and plug-in hybrids.</p>
            <p>For charging at home or work, some electric vehicles have converters onboard that can plug into a standard electrical outlet or a high-capacity appliance outlet. Others either require or can use a charging station that provides electrical conversion, monitoring, or safety functionality. These stations are also needed when traveling, and many support faster charging at higher voltages and currents than are available from residential EVSEs. Public charging stations are typically on-street facilities provided by electric utility companies or located at retail shopping centers, restaurants, and parking places, operated by a range of private companies.</p>
        </x-section>
        <div class="img-box">
            <img src="{{ asset('images/ChargingStation_Clear_021221.png') }}" width="250" />
        </div>
    </div>
    <x-hero img="{{ asset('images/mercedes-benz-eqc-provided-331.jpg') }}">
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
</x-layout>