<x-layout :indicators="$indicators">
    <x-hero img="{{ asset('images/hero.jpg') }}">
        EV Charging Station Integration and Service Specialists
    </x-hero>
    <div class="subhero">
        <x-section img="{{ asset('images/andrew-roberts-2JvEjF0tf50-unsplash.jpg') }}" name="We Handle Your EV Charging Station Needs">
            <ul>
                <li>Free Site Surveys</li>
                <li>Electrical Work</li>
                <li>Charging Station Installs</li>
            </ul>
        </x-section>
        <x-section img="{{ asset('images/chuttersnap-xJLsHl0hIik-unsplash.jpg') }}" name="From Concept to Charge!">
            <ul>
                <li>Proper EV Signage for the Parking Spots</li>
                <li>Full Maintenance Service After the Install</li>
                <li>Complete Services Throughout the United States and Canada</li>
            </ul>
        </x-section>
    </div>
    <x-carousel/>
    <div class="divider">
        <h1>Authorized Installers</h1>
        <img src="{{ asset('images/Enel-X.png') }}" height="100px" />
    </div>
    <div class="subhero">
        <div class="img-box">
            <img src="{{ asset('images/10-2-smartphone-transparent.png') }}" width="200" />
        </div>
        <div style="max-width: 600px;">
            <h2><a href="https://afdc.energy.gov/fuels/electricity_infrastructure_development.html" target="_blank">Charging Infrastructure Procurement and Installation</a></h2>
            <p>Increasing available public and private charging equipment require infrastructure procurement. Learn about how to successfully plan for, procure, and install charging infrastructure.</p>

            <h2><a href="https://afdc.energy.gov/fuels/electricity_infrastructure_maintenance_and_operation.html" target="_blank">Charging Infrastructure Operation and Maintenance</a></h2>
            <p>Once charging infrastructure has been procured and installed, it must be properly operated and maintained. Learn about charging infrastructure operation and maintenance considerations.</p>

            <h2>Future AC Charging Options</h2>
            <p>An additional standard (SAE J3068) is under development for higher rates of AC charging using three-phase power, which is common at commercial and industrial locations in the United States. Some components of the standard will be adapted from the European three-phase charging standards and specified for North American AC grid voltages and requirements. In the United States, the common three-phase voltages are typically 208/120 V, 480/277 V. The standard will target power levels between 6kW and 130kW. In addition, the U.S. Department of Energy's (DOE) Vehicle Technologies Office is pursuing research that will bridge the technology gaps associated with implementing an extreme fast charging network in the United States. A 2017 <a href="https://energy.gov/sites/prod/files/2017/10/f38/XFC%20Technology%20Gap%20Assessment%20Report_FINAL_10202017.pdf">report (PDF)</a> highlights technology gaps at the battery, vehicle, and infrastructure levels.</p>

            <h2>Inductive Charging</h2>
            <p>Inductive charging equipment, which uses an electromagnetic field to transfer electricity to a PEV without a cord, has been introduced commercially for installation as an aftermarket add-on. Most currently available wireless charging stations operate at power levels comparable to Level 2, though this technology is also available at higher power levels for mass transit operations.</p>
        </div>
    </div>
</x-layout>