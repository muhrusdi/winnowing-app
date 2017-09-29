<div class="result col s12">
                       <div class="row">
                           <div class="col s6">
                               <h3>N-GRAM Kalimat 1</h3>
                               <p>{{ $result['nGramFirst'] }}</p>

                           </div>
                           <div class="col s6">
                                <h3>N-GRAM Kalimat 2</h3>
                                <p>{{ $result['nGramSecond'] }}</p>
                           </div>
                           <div class="col s6">
                                <h3>Rolling Hash Kalimat 1</h3>
                               <p>{{ $result['rollingHashFirst'] }}</p>
                           </div>
                           <div class="col s6">
                                <h3>Rolling Hash Kalimat 2</h3>
                               <p>{{ $result['rollingHashSecond'] }}</p>
                           </div>
                           <div class="col s6">
                                <h3>Window Kalimat 1</h3>
                               <p>{{ $result['windowFirst'] }}</p>
                           </div>
                           <div class="col s6">
                                <h3>Window Kalimat 2</h3>
                               <p>{{ $result['windowSecond'] }}</p>
                           </div>
                           <div class="col s6">
                                <h3>Fingerprints Kalimat 1</h3>
                               <p>{{ $result['FingerprintsFirst'] }}</p>
                           </div>
                           <div class="col s6">
                                <h3>Fingerprints Kalimat 2</h3>
                               <p>{{ $result['FingerprintsSecond'] }}</p>
                           </div>
                           <div class="col s12">
                               <ul>
                                   <li><label for="">Jumalah Fingerprints kalimat 1</label>: {{ $result['countFinger1'] }}</li>
                                   <li><label for="">Jumalah Fingerprints kalimat 2</label>: {{ $result['countFinger2'] }}</li>
                                   <li><label for="">Union (Gabungan) Fingerprints 1 dan 2</label>: {{ $result['countUnionFingers'] }} </li>
                                   <li><label for="">Intersection (fingerprints yang sama)</label>: {{ $result['countIntersectFingers'] }}</li>
                                   <li><label for="">(Union - Intersection)</label>: {{ $result['windowFirst'] }}</li>
                                   <li><label for="">Jumalah Fingerprints kalimat 1</label>: {{ $result['countUnionFingers'] - $result['countIntersectFingers']}}</li>
                                   <li>Presentase Plagiarisme</li>
                                   <li>Koefisien Jaccard = (Intersection / (Union-Intersection)) * 100</li>
                                   <li>({{ $result['countIntersectFingers'] }}/{{$result['countUnionFingers']}})*100 = {{ $result['percent']}}%</li>
                               </ul>
                           </div>
                       </div>
                    </div>