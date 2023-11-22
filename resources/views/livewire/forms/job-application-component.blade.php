<div>

    <form class="hash-form" id="job_application_form" wire:submit.prevent="submit">
        <div class="section-heading mt-0">
            <x-elements.general.section-heading
                labelEn="Applied Job" 
                labelDh="ހުޝަހަޅާ ވަޒީފާ" 
                name="title" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>
        <div class="form-row">
            @php 
                $jobList[] = array(
                    "nameEn" => "Select an option", 
                    "valueEn" => "0",
                    "nameDh" => "ހިޔާރު ކުރައްވާ", 
                    "valueDh" => "0",
                    "disabled" => 'disabled',
                );
                $listingOptions = json_encode( $jobList );
            @endphp
            <x-elements.fields.select-field
                labelEn="Job Listing" 
                labelDh="އިއުލާން ކުރެވިފައިވާ ވަޒީފާ" 
                col="6" 
                name="job_opportunity_id" 
                class="select" 
                req="true"
                :options="$listingOptions"
                dualLanguage="true" 
                :language=$language
            />
        </div>
        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Details of the applicant" 
                labelDh="ވަޒީފާއަށް އެދޭ ފަރާތުގެ މައުލޫމާތު" 
                name="applicant_details" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>
        <div class="form-row">
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Full Name" 
                labelDh="ފުރިހަމަ ނަން" 
                col="6" 
                name="name" 
                class="form-control" 
                req="true" 
                dualLanguage="true" 
                :language=$language
            />
            @php 
                $genderOptions = json_encode( array(
                    array( 
                        "nameEn" => "Select an option", 
                        "valueEn" => "0",
                        "nameDh" => "ހިޔާރު ކުރައްވާ", 
                        "valueDh" => "0",
                        "disabled" => 'disabled',
                    ),
                    array( 
                        "nameEn" => "Male", 
                        "valueEn" => "Male",
                        "nameDh" => "ފިރިިހެން", 
                        "valueDh" => "ފިރިިހެން",
                    ),
                    array( 
                        "nameEn" => "Female", 
                        "valueEn" => "Female",
                        "nameDh" => "އަންހެން", 
                        "valueDh" => "އަންހެން",
                    ),
                ));
            @endphp
            <x-elements.fields.select-field
                labelEn="Gender" 
                labelDh="ޖިންސް" 
                col="6" 
                name="gender" 
                class="select" 
                req="true"
                :options="$genderOptions"
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Permanent Address" 
                labelDh="ދާއިމީ އެޑްރެސް" 
                col="6" 
                name="permanent_address" 
                class="form-control" 
                req="true" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Current Address" 
                labelDh="ދިރިއުޅޭ އެޑްރެސް" 
                col="6" 
                name="current_address" 
                class="form-control" 
                req="true" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="National ID Number" 
                labelDh="ދރއ. ކާޑު ނަންބަރު" 
                col="6" 
                name="nic" 
                class="form-control" 
                req="true" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="date" 
                labelEn="Date of birth" 
                labelDh="އުފަން ތާރީޚު" 
                col="6" 
                name="dob" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="email" 
                labelEn="Email" 
                labelDh="އީމެއިލް" 
                col="6" 
                name="email" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Phone" 
                labelDh="ފޯންް" 
                col="6" 
                name="phone" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
        </div>

        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Educational Qualifications (if you are submitting GCE O/L or A/L certificates please fill below)" 
                labelDh="ތައުލީމީ ފެންވަރު: (ސާނަވީ ނުވަތަ މަތީ ސާނަވީ ސެޓްފިކެޓްތައް ހުށަހަޅާނަމަ މިބައި ފުރިހަމަކުރައްވާ!)" 
                name="educational_qualifications" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>

        <div class="form-row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="section-heading">
                    <x-elements.general.section-heading
                        labelEn="GCE A/L Results" 
                        labelDh="ޖީ.ސީ.އީ އެޑްވާންސްޑް ލެވެލް އަދި އެޗް.އެސް.ސީ.ގެ ނަތީޖާ" 
                        name="gce_al_results" 
                        class="" 
                        tag="h5"
                        dualLanguage="true" 
                        :language=$language
                    />
                </div>

                <div class="form-row mb-3">
                    <div class="col-lg-12">
                        <div class="form-item-details-header">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'މާއްދާ' : 'Subject' }}</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ގްރޭޑް' : 'Grade' }}</h6>
                                </div>
                                <div class="col-lg-3">
                                    <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'އަހަރު' : 'Year' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse (collect($gce_al_results) as $index => $item)
                        <div class="col-lg-12" wire:key='gce_al_{{ $index }}'>
                            <div class="form-item-details-list">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <p>
                                            <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'މާއްދާ' : 'Subject' }}</span>
                                            &nbsp;{{ $item['gce_al_subject'] }}
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <p>
                                            <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ގްރޭޑް' : 'Grade' }}</span>
                                            &nbsp;{{ $item['gce_al_grade'] }}
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p>
                                            <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'އަހަރު' : 'Year' }}</span>
                                            &nbsp;{{ $item['gce_al_year'] }}
                                        </p>
                                    </div>
                                    <div class="col form-item-details-list-close-btn-container {{ $language == 'dh' ? 'dh' : 'en' }}">
                                        <button class="close-btn" wire:click="removeGceAlResult({{ $index }})" type="button"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12">
                            <div class="form-item-details-list">
                                <p class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ޑޭޓާ ނެތް' : 'No Data' }}</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="form-row">
                    <x-elements.fields.text-field 
                        type="text" 
                        labelEn="Subject" 
                        labelDh="މާއްދާ" 
                        col="4" 
                        name="gce_al_subject" 
                        class="form-control" 
                        req="false" 
                        dualLanguage="true" 
                        :language=$language
                    />
                    <x-elements.fields.text-field 
                        type="text" 
                        labelEn="Grade" 
                        labelDh="ގްރޭޑް" 
                        col="4" 
                        name="gce_al_grade" 
                        class="form-control" 
                        req="false" 
                        dualLanguage="false" 
                        :language=$language
                    />
                    <x-elements.fields.text-field 
                        type="text" 
                        labelEn="Year" 
                        labelDh="އަހަރު" 
                        col="4" 
                        name="gce_al_year" 
                        class="form-control" 
                        req="false" 
                        dualLanguage="false" 
                        :language=$language
                    />
                </div><!-- / form-row -->

                <div class="add-more-btn">
                    <button wire:click="addGceAlResult" type="button" class="btn btn-small primary"> 
                        <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ސޭވް' : 'Save' }}</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="section-heading">
                    <x-elements.general.section-heading
                        labelEn="GCE O/L Results" 
                        labelDh="ޖީ.ސީ.އީ އޯޑިނަރީ ލެވެލް އަދި އެސް.އެސް.ސީ.ގެ ނަތީޖާ" 
                        name="gce_ol_results" 
                        class="" 
                        tag="h5"
                        dualLanguage="true" 
                        :language=$language
                    />
                </div>

                <div class="form-row mb-3">
                    <div class="col-lg-12">
                        <div class="form-item-details-header">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'މާއްދާ' : 'Subject' }}</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ގްރޭޑް' : 'Grade' }}</h6>
                                </div>
                                <div class="col-lg-3">
                                    <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'އަހަރު' : 'Year' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse (collect($gce_ol_results) as $index => $item)
                        <div class="col-lg-12" wire:key='gce_ol_{{ $index }}'>
                            <div class="form-item-details-list">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <p>
                                            <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'މާއްދާ' : 'Subject' }}</span>
                                            &nbsp;{{ $item['gce_ol_subject'] }}
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <p>
                                            <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ގްރޭޑް' : 'Grade' }}</span>
                                            &nbsp;{{ $item['gce_ol_grade'] }}
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p>
                                            <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'އަހަރު' : 'Year' }}</span>
                                            &nbsp;{{ $item['gce_ol_year'] }}
                                        </p>
                                    </div>
                                    <div class="col form-item-details-list-close-btn-container {{ $language == 'dh' ? 'dh' : 'en' }}">
                                        <button class="close-btn" wire:click="removeGceOlResult({{ $index }})" type="button"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12">
                            <div class="form-item-details-list">
                                <p class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ޑޭޓާ ނެތް' : 'No Data' }}</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="form-row">
                    <x-elements.fields.text-field 
                        type="text" 
                        labelEn="Subject" 
                        labelDh="މާއްދާ" 
                        col="4" 
                        name="gce_ol_subject" 
                        class="form-control" 
                        req="false" 
                        dualLanguage="true" 
                        :language=$language
                    />
                    <x-elements.fields.text-field 
                        type="text" 
                        labelEn="Grade" 
                        labelDh="ގްރޭޑް" 
                        col="4" 
                        name="gce_ol_grade" 
                        class="form-control" 
                        req="false" 
                        dualLanguage="false" 
                        :language=$language
                    />
                    <x-elements.fields.text-field 
                        type="text" 
                        labelEn="Year" 
                        labelDh="އަހަރު" 
                        col="4" 
                        name="gce_ol_year" 
                        class="form-control" 
                        req="false" 
                        dualLanguage="false" 
                        :language=$language
                    />
                </div><!-- / form-row -->
                <div class="add-more-btn">
                    <button wire:click="addGceOlResult" type="button" class="btn btn-small primary">
                        <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ސޭވް' : 'Save' }}</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Degree, Diploma & Other" 
                labelDh="މަތީ ތައުލީމު (ފޯމާއެކު ހުށަހަޅާ މަތީ ތަޢުލީމީ ސެޓްފިކެޓްތަކުގެ މަޢުލޫމާތު މި ބައިގައި ފުރިހަމަކުރައްވާ!)" 
                name="degree_diplomas" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>

        <div class="form-row mb-3">
            <div class="col-lg-12">
                <div class="form-item-details-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ކޯހުގެ ނަން' : 'Course Name:' }}</h6>
                        </div>
                        <div class="col-lg-1">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ލެވެލް' : 'Course Level:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ފެށުނު ތާރީހް' : 'Start Date:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ނިމުނު ތާރީހް' : 'End Date:' }}</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'މަރުކަޒުގެ ނަން އަދި ގައުމު' : 'Institution Name and Country:' }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @forelse (collect($higher_education_certificates) as $index => $item)
                <div class="col-lg-12" wire:key='hec_{{ $index }}'>
                    <div class="form-item-details-list">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ކޯހުގެ ނަން' : 'Course Name:' }}</span>
                                    &nbsp;{{ $item['higher_ed_course_name'] }}
                                </p>
                            </div>
                            <div class="col-lg-1 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ލެވެލް' : 'Course Level:' }}</span>
                                    &nbsp;{{ $item['higher_ed_course_level'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ފެށުނު ތާރީހް' : 'Start Date:' }}</span>
                                    &nbsp;{{ $item['higher_ed_start_date'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ނިމުނު ތާރީހް' : 'End Date:' }}</span>
                                    &nbsp;{{ $item['higher_ed_end_date'] }}
                                </p>
                            </div>
                            <div class="col-lg-3 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'މަރުކަޒުގެ ނަން އަދި ގައުމު' : 'Institution Name and Country:' }}</span>
                                    &nbsp;{{ $item['higher_ed_institution_country'] }}
                                </p>
                            </div>
                            <div class="col form-item-details-list-close-btn-container {{ $language == 'dh' ? 'dh' : 'en' }}">
                                <button class="close-btn" wire:click="removeHigherEducationCourse({{ $index }})" type="button"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <div class="form-item-details-list">
                        <p class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ޑޭޓާ ނެތް' : 'No Data' }}</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="form-row">
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Course Name" 
                labelDh="ކޯހުގެ ނަން" 
                col="3" 
                name="higher_ed_course_name" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Course Level" 
                labelDh="ކޯހުގެ ފެންވަރު" 
                col="2" 
                name="higher_ed_course_level" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="date" 
                labelEn="Start Date" 
                labelDh="ފެށި ތާރީޚު" 
                col="2" 
                name="higher_ed_start_date" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="date" 
                labelEn="End Date" 
                labelDh="ނިމުނު ތާރީޚު" 
                col="2" 
                name="higher_ed_end_date" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Institution Name and Country" 
                labelDh="ކޯސް ހެދި މަރުކަޒުގެ ނަން / ގައުމު" 
                col="3" 
                name="higher_ed_institution_country" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
        </div><!-- / form-row -->

        <div class="add-more-btn">
            <button wire:click="addHigherEducationCourse" type="button" class="btn btn-small primary">
                <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ސޭވް' : 'Save' }}</span>
            </button>
        </div>

        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Professional Certificates (Short trainings)" 
                labelDh="ކުރުމުއްދަތުގެ ތަމްރީން (ފޯމާއެކު ހުށަހަޅާ ތަމްރީނު ސެޓްފިކެޓްތަކުގެ މަޢުލޫމާތު މި ބައިގައި ފުރިހަމަކުރައްވާ!)" 
                name="short_trainings" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>

        <div class="form-row mb-3">
            <div class="col-lg-12">
                <div class="form-item-details-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ތަމްރީނު ޕްރޮގްރާމުގެ ނަން' : 'Training Name:' }}</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ތަމްރީނު ހިންގި މަރުކަޒު/ ގައުމު' : 'Institution / Country:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'މުއްދަތު' : 'Duration:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ބައިވެރިވި އަހަރު' : 'Year participated:' }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @forelse (collect($professional_trainings) as $index => $item)
                <div class="col-lg-12" wire:key='pt_{{ $index }}'>
                    <div class="form-item-details-list">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ތަމްރީނު ޕްރޮގްރާމުގެ ނަން' : 'Training Name:' }}</span>
                                    &nbsp;{{ $item['professional_certificate_training_name'] }}
                                </p>
                            </div>
                            <div class="col-lg-4 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ތަމްރީނު ހިންގި މަރުކަޒު/ ގައުމު' : 'Institution / Country:' }}</span>
                                    &nbsp;{{ $item['professional_certificate_training_institution_country'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'މުއްދަތު' : 'Duration:' }}</span>
                                    &nbsp;{{ $item['professional_certificate_training_duration'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ބައިވެރިވި އަހަރު' : 'Year participated:' }}</span>
                                    &nbsp;{{ $item['professional_certificate_training_year'] }}
                                </p>
                            </div>
   
                            <div class="col form-item-details-list-close-btn-container {{ $language == 'dh' ? 'dh' : 'en' }}">
                                <button class="close-btn" wire:click="removeProfessionalCertificate({{ $index }})" type="button"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <div class="form-item-details-list">
                        <p class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ޑޭޓާ ނެތް' : 'No Data' }}</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="form-row">
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Training Name" 
                labelDh="ތަމްރީނު ޕްރޮގްރާމުގެ ނަން" 
                col="4" 
                name="professional_certificate_training_name" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Institution / Country" 
                labelDh="ތަމްރީނު ހިންގި މަރުކަޒު/ ގައުމު" 
                col="4" 
                name="professional_certificate_training_institution_country" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Duration" 
                labelDh="މުއްދަތު" 
                col="2" 
                name="professional_certificate_training_duration" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Year participated" 
                labelDh="ބައިވެރިވި އަހަރު" 
                col="2" 
                name="professional_certificate_training_year" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
        </div><!-- / form-row -->

        <div class="add-more-btn">
            <button wire:click="addProfessionalCertificate" type="button" class="btn btn-small primary">
                <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ސޭވް' : 'Save' }}</span>
            </button>
        </div>

        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Previous and Current Employment" 
                labelDh="އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ވަޒީފާތަކާ ބެހޭ މައުލޫމާތު" 
                name="previous_current_employment" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>

        <div class="form-row mb-3">
            <div class="col-lg-12">
                <div class="form-item-details-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ވަޒީފާ' : 'Position Name:' }}</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ވަޒީފާ އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ތަނުގެ ނަން' : 'Place of employment:' }}</h6>
                        </div>
                        <div class="col-lg-1">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? '(އަހަރު) މުއްދަތު' : 'Duration (Years):' }}</h6>
                        </div>
                        <div class="col-lg-1">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'މުސާރަ' : 'Salary:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ވަކިވި ސަބަބު' : 'Reason of termination:' }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @forelse (collect($employment_history) as $index => $item)
                <div class="col-lg-12" wire:key='eh_{{ $index }}'>
                    <div class="form-item-details-list">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ވަޒީފާ' : 'Position Name:' }}</span>
                                    &nbsp;{{ $item['employment_position_name'] }}
                                </p>
                            </div>
                            <div class="col-lg-4 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ވަޒީފާ އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ތަނުގެ ނަން' : 'Place of employment:' }}</span>
                                    &nbsp;{{ $item['place_of_employment'] }}
                                </p>
                            </div>
                            <div class="col-lg-1 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? '(އަހަރު) މުއްދަތު' : 'Duration (Years):' }}</span>
                                    &nbsp;{{ $item['employment_duration'] }}
                                </p>
                            </div>
                            <div class="col-lg-1 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'މުސާރަ' : 'Salary:' }}</span>
                                    &nbsp;{{ $item['employment_salary'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ވަކިވި ސަބަބު' : 'Reason of termination:' }}</span>
                                    &nbsp;{{ $item['employment_termination_reason'] }}
                                </p>
                            </div>
   
                            <div class="col form-item-details-list-close-btn-container {{ $language == 'dh' ? 'dh' : 'en' }}">
                                <button class="close-btn" wire:click="removeEmploymentHistory({{ $index }})" type="button"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <div class="form-item-details-list">
                        <p class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ޑޭޓާ ނެތް' : 'No Data' }}</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="form-row">
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Position Name" 
                labelDh="އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ވަޒީފާ" 
                col="3" 
                name="employment_position_name" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Place of employment" 
                labelDh="ވަޒީފާ އަދާކުރަމުންދާ ނުވަތަ އަދާކުރި ތަނުގެ ނަން" 
                col="3" 
                name="place_of_employment" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="number" 
                labelEn="Duration (Years)" 
                labelDh="(އަހަރު) މުއްދަތު" 
                col="2" 
                name="employment_duration" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="number" 
                labelEn="Salary" 
                labelDh="މުސާރަ" 
                col="2" 
                name="employment_salary" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Reason of termination" 
                labelDh="ވަކިވި ސަބަބު" 
                col="2" 
                name="employment_termination_reason" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
        </div><!-- / form-row -->

        <div class="add-more-btn">
            <button wire:click="addEmploymentHistory" type="button" class="btn btn-small primary">
                <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ސޭވް' : 'Save' }}</span>
            </button>
        </div>

        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Service Bond(s)" 
                labelDh="ޚިދުމަތްކުރުމުގެ ބޮންޑާބެހޭ މައުލޫމާތު" 
                name="service_bonds" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>

        <div class="form-row mb-3">
            <div class="col-lg-12">
                <div class="form-item-details-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ބޮންޑު ކުރެވުނު ސަބަބު' : 'Reason for the bond:' }}</h6>
                        </div>
                        <div class="col-lg-1">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ބޮންޑުގެ މުއްދަތު' : 'Bond duration:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ފެށުނު ތާރީޚު' : 'Start Date:' }}</h6>
                        </div>
                        <div class="col-lg-2">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ނިމޭނެ ތާރީޚު' : 'End Date:' }}</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'މިހާރު ކަންއޮތްގޮތް' : 'Current status:' }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @forelse (collect($service_bonds) as $index => $item)
                <div class="col-lg-12" wire:key='sb_{{ $index }}'>
                    <div class="form-item-details-list">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ބޮންޑު ކުރެވުނު ސަބަބު' : 'Reason for the bond:' }}</span>
                                    &nbsp;{{ $item['bond_reason'] }}
                                </p>
                            </div>
                            <div class="col-lg-1 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ބޮންޑުގެ މުއްދަތު' : 'Bond duration:' }}</span>
                                    &nbsp;{{ $item['bond_duration'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ފެށުނު ތާރީޚު' : 'Start Date:' }}</span>
                                    &nbsp;{{ $item['bond_start_date'] }}
                                </p>
                            </div>
                            <div class="col-lg-2 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'ނިމޭނެ ތާރީޚު' : 'End Date:' }}</span>
                                    &nbsp;{{ $item['bond_end_date'] }}
                                </p>
                            </div>
                            <div class="col-lg-3 col-12">
                                <p>
                                    <span class="lang-{{ $language }} visible form-item-title">{{ $language == 'dh' ? 'މިހާރު ކަންއޮތްގޮތް' : 'Current status:' }}</span>
                                    &nbsp;{{ $item['bond_status'] }}
                                </p>
                            </div>
   
                            <div class="col form-item-details-list-close-btn-container {{ $language == 'dh' ? 'dh' : 'en' }}">
                                <button class="close-btn" wire:click="removeServiceBond({{ $index }})" type="button"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <div class="form-item-details-list">
                        <p class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ޑޭޓާ ނެތް' : 'No Data' }}</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="form-row">
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Reason for the bond" 
                labelDh="ބޮންޑު ކުރެވުނު ސަބަބު" 
                col="3" 
                name="bond_reason" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Bond duration" 
                labelDh="ބޮންޑުގެ މުއްދަތު" 
                col="3" 
                name="bond_duration" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="date" 
                labelEn="Start Date" 
                labelDh="ފެށުނު ތާރީޚު" 
                col="2" 
                name="bond_start_date" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="date" 
                labelEn="End Date" 
                labelDh="ނިމޭނެ ތާރީޚު" 
                col="2" 
                name="bond_end_date" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Current status" 
                labelDh="މިހާރު ކަންއޮތްގޮތް" 
                col="2" 
                name="bond_status" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
        </div><!-- / form-row -->

        <div class="add-more-btn">
            <button wire:click="addServiceBond" type="button" class="btn btn-small primary">
                <span class="lang-{{ $language }} visible">{{ $language == 'dh' ? 'ސޭވް' : 'Save' }}</span>
            </button>
        </div>

        <div class="section-heading">
            <x-elements.general.section-heading
                labelEn="Supporting documentation" 
                labelDh="ބޭނުންވާ ލިޔުންތައް" 
                name="title" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>
        <div class="form-row">
            <x-elements.fields.file-upload-field 
                labelEn="Application Form" 
                labelDh="ވަޒީފާއަށް އެދޭ ފޯމް" 
                col="4" 
                name="application_form" 
                class="file-upload-input" 
                req="true"
                mimeTypes="( PDF | 5MB Max )"
                :filePreview=$application_form
                dualLanguage="true" 
                :language=$language
            />

            <x-elements.fields.file-upload-field 
                labelEn="Applicant CV" 
                labelDh="ވަޒީފާއަށް އެދޭ ފަރާތުގެ ވަނަވަރު (ސީވީ)" 
                col="4" 
                name="applicant_cv" 
                class="file-upload-input" 
                req="true"
                mimeTypes="( PDF | 5MB Max )"
                :filePreview=$applicant_cv
                dualLanguage="true" 
                :language=$language
            />

            <x-elements.fields.file-upload-field 
                labelEn="Upload National ID Card" 
                labelDh="އައިޑީކާޑު ކޮޕީ އަޕްލޯޑް ކުރައްވާ" 
                col="4" 
                name="national_id_card" 
                class="file-upload-input" 
                req="true"
                mimeTypes="( PDF | 5MB Max )"
                :filePreview=$national_id_card
                dualLanguage="true" 
                :language=$language
            />

            <x-elements.fields.file-upload-field 
                labelEn="GCE O/L and A/L Certificates (binded)" 
                labelDh="ޖީ.ސީ.އީ އޯލެވަލް އަދި ޖީ.ސީ.އީ އޭލެވަލް ސެޓްފިކެޓްތަކުގެ ކޮޕީ" 
                col="4" 
                name="gce_ol_al_certificates" 
                class="file-upload-input" 
                req="false"
                mimeTypes="( PDF | 10MB Max )"
                :filePreview=$gce_ol_al_certificates
                dualLanguage="true" 
                :language=$language
            />

            <x-elements.fields.file-upload-field 
                labelEn="College Degree / Diploma / Masters Certificate & Transcript Copy" 
                labelDh="ޑިޕްލޮމާ/ ބެޗެލަރސް ޑިގްރީ/ މާސްޓަރސް ޑިގްރީ ސެޓްފިކެޓާއި ޓްރާންސްކްރިޕްޓްގެ ކޮޕީ ނުވަތަ ކޯސް ނިންމިކަމުގެ ލިޔުން" 
                col="4" 
                name="college_degree_diploma_masters" 
                class="file-upload-input" 
                req="false"
                mimeTypes="( PDF | 10MB Max )"
                :filePreview=$college_degree_diploma_masters
                dualLanguage="true" 
                :language=$language
            />

            <x-elements.fields.file-upload-field 
                labelEn="Short Training Course Certificates" 
                labelDh="ކުރުމުއްދަތުގެ ތަމްރީނު ސެޓްފިކެޓްތައް" 
                col="4" 
                name="short_training_certificates" 
                class="file-upload-input" 
                req="false"
                mimeTypes="( PDF | 10MB Max )"
                :filePreview=$short_training_certificates
                dualLanguage="true" 
                :language=$language
            />

            <x-elements.fields.file-upload-field 
                labelEn="Employment Reference Letters" 
                labelDh="މަސައްކަތުގެ ތަޖުރިބާގެ ލިޔުންތައް" 
                col="4" 
                name="employment_reference_letters" 
                class="file-upload-input" 
                req="false"
                mimeTypes="( PDF | 10MB Max )"
                :filePreview=$employment_reference_letters
                dualLanguage="true" 
                :language=$language
            />
            
        </div>
        
        @if(!empty( nova_get_setting('job_application_dec_en') && nova_get_setting('job_application_dec_dh') ))
            <div class="section-heading">
                <x-elements.general.section-heading
                    labelEn="Declaration" 
                    labelDh="ޑިކްލަރޭޝަން" 
                    name="declaration_heading" 
                    class="" 
                    tag="h5"
                    dualLanguage="true" 
                    :language=$language
                />
            </div>
            <div class="form-row">
                @php
                $dec_en = nova_get_setting('job_application_dec_en');
                $dec_dh = nova_get_setting('job_application_dec_dh');
                @endphp
                <x-elements.general.rich-text
                    labelEn="" 
                    labelDh="" 
                    name="declaration" 
                    col="12" 
                    class="" 
                    dualLanguage="true" 
                    :language=$language
                    :contentEn=$dec_en
                    :contentDh=$dec_dh
                />
            </div>
        @endif
        <div id="success_message">
            <x-elements.alerts.form-processing
                labelEn="Processing" 
                labelDh="ފޮނުވަނީ" 
                target="submit" 
                icon="fas fa-spinner"
                class="" 
                dualLanguage="true" 
                :language=$language
            />
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <x-elements.buttons.form-submit
            labelEn="Submit" 
            labelDh="ފޮނުވާ" 
            name="submit" 
            class="g-recaptcha btn btn-big primary bcmstc_submit" 
            dualLanguage="true" 
            :language=$language
        />
    </form>
</div>

@push('script')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
        document.getElementById("job_application_form").submit();
        }
    </script>
@endpush