@extends('layouts.client.default')
@section('url-form', '{{ route(contact) }}')
@section('params-form')
    <div>
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTEyNDMzMTExNQ9kFgQCAQ9kFgpmD2QWAmYPFgIeBFRleHQFCkNvbnRhY3QgVXNkAgMPFgIfAAXbAQ0KPGxpbmsgcmVsPSdjYW5vbmljYWwnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2xpZW4taGUuaHRtJyAvPg0KPG1ldGEgbmFtZT0ia2V5d29yZHMiIGNvbnRlbnQ9Im1penVpa3UgLSBlbSB5w6p1IG7GsOG7m2Mgc+G6oWNoIiAvPg0KPG1ldGEgbmFtZT0iZGVzY3JpcHRpb24iIGNvbnRlbnQ9Im1penVpa3UgLSBlbSB5w6p1IG7GsOG7m2Mgc+G6oWNoIiAvPmQCBA8WAh8ABa0CDQo8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9IkNvbnRhY3QgVXMiIC8+DQo8bWV0YSBwcm9wZXJ0eT0ib2c6dHlwZSIgY29udGVudD0iYXJ0aWNsZSIgLz4NCjxtZXRhIHByb3BlcnR5PSJvZzp1cmwiIGNvbnRlbnQ9Imh0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2xpZW4taGUuaHRtIiAvPg0KPG1ldGEgcHJvcGVydHk9Im9nOmltYWdlIiBjb250ZW50PSIiIC8+DQo8bWV0YSBwcm9wZXJ0eT0ib2c6ZGVzY3JpcHRpb24iIGNvbnRlbnQ9Im1penVpa3UgLSBlbSB5w6p1IG7GsOG7m2Mgc+G6oWNoIiAvPmQCBQ8WAh8ABZ4BDQo8bGluayByZWw9IlNob3J0Y3V0IGljb24iIGhyZWY9Imh0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9TeXN0ZW1XZWJzaXRlL2ljb25idG5ob2M2MzYzMTk5MjAxNDc2MjI3NzQ2MzY1NTkyMjU2MDU1OTUwMTgucG5nIiB0eXBlPSJpbWFnZS94LWljb24iLz5kAgYPFgIfAAUyPHN0eWxlPg0KI2Zvb3R7cGFkZGluZy10b3A6MCAhaW1wb3J0YW50fQ0KPC9zdHlsZT5kAgMQFgIeBmFjdGlvbgUML2xpZW4taGUuaHRtZBYCAgEPZBYKZg9kFgwCAQ9kFgJmDxYCHwAFqQI8YSBjbGFzcz0nc2xvZ2FuIGRubW9iaWxlJyAgdGl0bGU9JycgaHJlZj0nLyc+PGltZyBhbHQ9IiIgc3JjPSJodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL21penVpa3Vfbl82MzY2ODczMzc2NDgzMzMxOTIucG5nIiAvPjwvYT48YSBjbGFzcz0nc2xvZ2FuIGRuIGRiTW9iaWxlJyAgdGl0bGU9JycgaHJlZj0nLyc+PGltZyBhbHQ9IiIgc3JjPSJodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL2xvZ29yZXNwb182MzYzMzIwNTY0NjIwODMxNDAucG5nIiAvPjwvYT5kAgMPZBYCAgEPFgIfAAXbCA0KPGRpdiBjbGFzcz0naXRlbSc+DQogICAgPGEgaHJlZj0naHR0cDovL2hvaXNpbmh2aWVuLmNvbS52bi8nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nU3R1ZGVudCBVbmlvbiBvZiBWaWV0bmFtJz4NCiAgICAgICAgPGltZyBhbHQ9J1N0dWRlbnQgVW5pb24gb2YgVmlldG5hbScgc3JjPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL2hzXzYzNjUzOF82MzY1NjAxODE3NzEwNzQ1NTUucG5nJyAvPg0KICAgIDwvYT4NCiAgICA8cCBjbGFzcz0ndGl0bGUgZnMxMSc+U3R1ZGVudCBVbmlvbiBvZiBWaWV0bmFtPC9wPg0KPC9kaXY+DQoNCjxkaXYgY2xhc3M9J2l0ZW0nPg0KICAgIDxhIGhyZWY9J2h0dHA6Ly93d3cudGhpZXVuaGl2aWV0bmFtLnZuLycgdGFyZ2V0PSdfYmxhbmsnIHRpdGxlPSdZb3VuZyBQaW9uZWVyIE9yZyc+DQogICAgICAgIDxpbWcgYWx0PSdZb3VuZyBQaW9uZWVyIE9yZycgc3JjPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL2hkXzYzNjUzOF82MzY1NjAxODE4MzcyODgzNDMucG5nJyAvPg0KICAgIDwvYT4NCiAgICA8cCBjbGFzcz0ndGl0bGUgZnMxMSc+WW91bmcgUGlvbmVlciBPcmc8L3A+DQo8L2Rpdj4NCg0KPGRpdiBjbGFzcz0naXRlbSc+DQogICAgPGEgaHJlZj0naHR0cHM6Ly93d3cuc3VudG9yeS5jb20vJyB0YXJnZXQ9J19ibGFuaycgdGl0bGU9Jyc+DQogICAgICAgIDxpbWcgYWx0PScnIHNyYz0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vcGljL2Jhbm5lci9fLTAxLUZvci1fNjM2NTgzNDU3ODI3MzQyMzc3LnBuZycgLz4NCiAgICA8L2E+DQogICAgPHAgY2xhc3M9J3RpdGxlIGZzMTEnPjwvcD4NCjwvZGl2Pg0KDQo8ZGl2IGNsYXNzPSdpdGVtJz4NCiAgICA8YSBocmVmPSdodHRwczovL3N1bnRvcnlwZXBzaWNvLnZuL2VuJyB0YXJnZXQ9J19ibGFuaycgdGl0bGU9Jyc+DQogICAgICAgIDxpbWcgYWx0PScnIHNyYz0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vcGljL2Jhbm5lci9sb2dvZmluYWxfNjM2NTkwNjE3NDgxNzIzNTI0LnBuZycgLz4NCiAgICA8L2E+DQogICAgPHAgY2xhc3M9J3RpdGxlIGZzMTEnPjwvcD4NCjwvZGl2Pg0KZAIFDxYCHwAF1gI8ZGl2IGNsYXNzPSdob2NuZ2F5Jz48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9lLWxlYXJuaW5nLmh0bScgIGNsYXNzPSdidG5ob2NuZ2F5JyB0aXRsZT0nTGVhcm4gbm93Jz5MZWFybiBub3c8L2E+PHVsIGNsYXNzPSdzdWJsb2dpbnggc3VibG9naW4yJz48bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vZS1sZWFybmluZy5odG0nIHRpdGxlPSdFLWxlYXJuaW5nJz5FLWxlYXJuaW5nPC9hPjwvbGk+PGxpPjxhIGhyZWY9Jy90aG9uZy1rZS5odG0nIHRpdGxlPSdUaOG7kW5nIGvDqic+VGjhu5FuZyBrw6o8L2E+PC9saT4gPC91bD48L2Rpdj5kAgcPFgIfAAXIAQ0KPGEgaHJlZj0namF2YXNjcmlwdDovLycgdGl0bGU9J1JlZ2lzdGVyJyBjbGFzcz0nYnRuZGsgc2xpZGVfb3BlbiBmczEyJz5SZWdpc3RlcjwvYT4NCjxzcGFuIGNsYXNzPSdib3JkZXInPjwvc3Bhbj4NCjxhIGhyZWY9J2phdmFzY3JpcHQ6Ly8nIHRpdGxlPSdMb2dpbicgY2xhc3M9J2J0bmRrIGxvZ2luRm9ybV9vcGVuIGZzMTInPkxvZ2luPC9hPg0KZAIJD2QWAmYPFgIfAAXlATx1bCBjbGFzcz0nQ29tbW9uTGFuZ3VhZ2UnPg0KICAgIDxsaT48YSBocmVmPSdqYXZhc2NyaXB0OjsnIGNsYXNzPSdsYW5nY2hpJyBvbmNsaWNrPSdTZXRMYW5nRGlzcGxheSgxKSc+VGnhur9uZyBWaeG7h3Q8L2E+PC9saT4NCg0KICAgIDxsaT48YSBocmVmPSdqYXZhc2NyaXB0OjsnIGNsYXNzPSdsYW5nY2hpJyBvbmNsaWNrPSdTZXRMYW5nRGlzcGxheSgyKSc+RW5nbGlzaDwvYT48L2xpPg0KPC91bD5kAgsPZBYEZg8WAh8ABbwPPHVsIGlkPSdDb21tb25NZW51TWFpbicgY2xhc3M9J21haW4nPjxsaSBkYXRhPScxJyBjbGFzcz0nbGl0b3AgJz48YSBocmVmPScvJyAgdGl0bGU9J0hvbWUgJz5Ib21lIDwvYT48L2xpPjxsaSBkYXRhPScyJyBjbGFzcz0nbGl0b3AgaGFzc3ViJz48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9naW9pLXRoaWV1Lmh0bScgIHRpdGxlPSdBYm91dCB1cyc+QWJvdXQgdXM8L2E+PHVsPg0KPGxpPg0KICAgIDxhIHRpdGxlPSciTWl6dWlrdSAtIEkgbG92ZSBjbGVhbiB3YXRlciIgcHJvZ3JhbSBpbnRyb2R1Y3Rpb24nIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL21penVpa3UtaS1sb3ZlLWNsZWFuLXdhdGVyLXByb2dyYW0taW50cm9kdWN0aW9uLmh0bScgPiJNaXp1aWt1IC0gSSBsb3ZlIGNsZWFuIHdhdGVyIiBwcm9ncmFtIGludHJvZHVjdGlvbjwvYT4NCjwvbGk+DQo8bGk+DQogICAgPGEgdGl0bGU9J0NvLW9yZ2FuaXppbmcgQm9hcmQgJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9jby1vcmdhbml6aW5nLWJvYXJkLmh0bScgPkNvLW9yZ2FuaXppbmcgQm9hcmQgPC9hPg0KPC9saT48L3VsPjwvbGk+PGxpIGRhdGE9JzMnIGNsYXNzPSdsaXRvcCBoYXNzdWInPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3Rpbi10dWMuaHRtJyAgdGl0bGU9J05ld3MnPk5ld3M8L2E+PHVsPg0KPGxpPg0KICAgIDxhIHRpdGxlPSdQcm9ncmFtIG5ld3MnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3Byb2dyYW0tbmV3cy5odG0nID5Qcm9ncmFtIG5ld3M8L2E+DQo8L2xpPg0KPGxpPg0KICAgIDxhIHRpdGxlPSdFbnZpcm9ubWVudGFsIG5ld3MgJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9lbnZpcm9ubWVudGFsLW5ld3MuaHRtJyA+RW52aXJvbm1lbnRhbCBuZXdzIDwvYT4NCjwvbGk+PC91bD48L2xpPjxsaSBkYXRhPSc0JyBjbGFzcz0nbGl0b3AgaGFzc3ViJz48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi90aHUtdmllbi5odG0nICB0aXRsZT0nR2FsbGVyeSc+R2FsbGVyeTwvYT48dWw+DQo8bGk+DQogICAgPGEgdGl0bGU9J0FsYnVtICcgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vYWxidW0uaHRtJyA+QWxidW0gPC9hPg0KPC9saT4NCjxsaT4NCiAgICA8YSB0aXRsZT0nVmlkZW9zJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi92aWRlb3MtZW4uaHRtJyA+VmlkZW9zPC9hPg0KPC9saT48L3VsPjwvbGk+PGxpIGRhdGE9JzUnIGNsYXNzPSdsaXRvcCBoYXNzdWInPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2xpY2gtdHJpbmguaHRtJyAgdGl0bGU9J1Byb2dyYW0gdGltZWxpbmUnPlByb2dyYW0gdGltZWxpbmU8L2E+PHVsPg0KPGxpPg0KICAgIDxhIHRpdGxlPSdQcm9ncmFtIHRpbWVsaW5lJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9wcm9ncmFtLXRpbWVsaW5lLmh0bScgPlByb2dyYW0gdGltZWxpbmU8L2E+DQo8L2xpPjwvdWw+PC9saT48bGkgZGF0YT0nNicgY2xhc3M9J2xpdG9wIGhhc3N1Yic+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4va2hvYS1ob2MuaHRtJyAgdGl0bGU9J0UtbGVhcm5pbmcnPkUtbGVhcm5pbmc8L2E+PHVsPg0KPGxpPg0KICAgIDxhIHRpdGxlPSdFLWxlYXJuaW5nJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9lLWxlYXJuaW5nLmh0bScgPkUtbGVhcm5pbmc8L2E+DQo8L2xpPjwvdWw+PC9saT48bGkgZGF0YT0nNycgY2xhc3M9J2xpdG9wICc+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vbGllbi1oZS5odG0nICB0aXRsZT0nQ29udGFjdCBVcyc+Q29udGFjdCBVczwvYT48L2xpPjwvdWw+ZAIBDxYCHwAFpQE8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0naHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL21penVpa3VlbXlldW51b2NzYWNoLycgdGl0bGU9J2ZhbnBhZ2UgZmFjZWJvb2snPjxzcGFuPkZvbGxvdyB1czwvc3Bhbj48aW1nIGFsdD0nZmInIHNyYz0nL2Nzcy9Db21tb24vZmIucG5nJyAvPjwvYT5kAgIPZBYCZg8WAh8ABVs8bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vbGllbi1oZS5odG0nIHRpdGxlPSdDb250YWN0Jz5Db250YWN0PC9hPjwvbGk+ZAIED2QWAmYPZBYCZg9kFghmDxYCHwAFygQ8dWw+DQoJPGxpIHN0eWxlPSJsaW5lLWhlaWdodDogbm9ybWFsOyI+DQoJCTxzcGFuIGNsYXNzPSJmT2ZmaWNpbmFTYW5JVENCb2xkIj5Db250YWN0OiZuYnNwOzwvc3Bhbj5TdW50b3J5IFBlcHNpQ28gQmV2ZXJhZ2UgQ29tcGFueSBMaW1pdGVkIFZpZXRuYW08L2xpPg0KCTxsaSBzdHlsZT0ibGluZS1oZWlnaHQ6IG5vcm1hbDsiPg0KCQk8c3BhbiBjbGFzcz0iZk9mZmljaW5hU2FuSVRDQm9sZCI+QWRkcmVzczogNUY8L3NwYW4+LCBTaGVyYXRvbiBIb3RlbCwgODggRG9uZyBLaG9pIFN0cmVldCwgRGlzdHJpY3QgMSwgSG8gQ2hpIE1pbmggY2l0eSwgVmlldG5hbTwvbGk+DQoJPGxpIHN0eWxlPSJsaW5lLWhlaWdodDogbm9ybWFsOyI+DQoJCTxzcGFuIGNsYXNzPSJmT2ZmaWNpbmFTYW5JVENCb2xkIj5UZWw6Jm5ic3A7PC9zcGFuPig4NCAyOCkgMyA4MjEgOTQzNyAoZXh0IDI0Mik8L2xpPg0KCTxsaSBzdHlsZT0ibGluZS1oZWlnaHQ6IG5vcm1hbDsiPg0KCQk8c3BhbiBjbGFzcz0iZk9mZmljaW5hU2FuSVRDQm9sZCI+V2Vic2l0ZTombmJzcDs8L3NwYW4+d3d3Lm1penVpa3UtZW15ZXVudW9jc2FjaC52bjwvbGk+DQo8L3VsPg0KZAIBDxBkDxYBZhYBEAUmIk1penVpa3UgLSBJIGxvdmUgY2xlYW4gd2F0ZXIiIHByb2dyYW0FAjYwZ2RkAgIPFgIfAGVkAgMPFgIfAAUTKDg0IDI4KSAzIDgyMSA5NDI3IGQCBw9kFgZmD2QWAmYPFgIfAAWpAjxhIGNsYXNzPSdzbG9nYW4gZG5tb2JpbGUnICB0aXRsZT0nJyBocmVmPScvJz48aW1nIGFsdD0iIiBzcmM9Imh0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvbWl6dWlrdV9uXzYzNjY4NzMzNzY0ODMzMzE5Mi5wbmciIC8+PC9hPjxhIGNsYXNzPSdzbG9nYW4gZG4gZGJNb2JpbGUnICB0aXRsZT0nJyBocmVmPScvJz48aW1nIGFsdD0iIiBzcmM9Imh0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvbG9nb3Jlc3BvXzYzNjMzMjA1NjQ2MjA4MzE0MC5wbmciIC8+PC9hPmQCAQ8WAh8ABeEZDQogICAgDQo8dWwgaWQ9J0NvbW1vbk1lbnVGb290ZXInIGNsYXNzPSdtYWluJz48bGk+PGEgaHJlZj0nLycgIHRpdGxlPSdIb21lICc+SG9tZSA8L2E+PC9saT48bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vZ2lvaS10aGlldS5odG0nICB0aXRsZT0nQWJvdXQgdXMnPkFib3V0IHVzPC9hPjwvbGk+PGxpPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3Rpbi10dWMuaHRtJyAgdGl0bGU9J05ld3MnPk5ld3M8L2E+PC9saT48bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vdGh1LXZpZW4uaHRtJyAgdGl0bGU9J0dhbGxlcnknPkdhbGxlcnk8L2E+PC9saT48bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vbGljaC10cmluaC5odG0nICB0aXRsZT0nUHJvZ3JhbSB0aW1lbGluZSc+UHJvZ3JhbSB0aW1lbGluZTwvYT48L2xpPjxsaT48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9raG9hLWhvYy5odG0nICB0aXRsZT0nRS1sZWFybmluZyc+RS1sZWFybmluZzwvYT48L2xpPjxsaT48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9saWVuLWhlLmh0bScgIHRpdGxlPSdDb250YWN0IFVzJz5Db250YWN0IFVzPC9hPjwvbGk+PC91bD4NCjxkaXY+DQoJPHNwYW4gc3R5bGU9ImJhY2tncm91bmQtaW1hZ2U6aW5pdGlhbDtiYWNrZ3JvdW5kLXBvc2l0aW9uOmluaXRpYWw7YmFja2dyb3VuZC1zaXplOmluaXRpYWw7YmFja2dyb3VuZC1yZXBlYXQ6aW5pdGlhbDtiYWNrZ3JvdW5kLWF0dGFjaG1lbnQ6aW5pdGlhbDtiYWNrZ3JvdW5kLW9yaWdpbjppbml0aWFsO2JhY2tncm91bmQtY2xpcDppbml0aWFsOyI+UGVybWl0IE5vLiA8c3Ryb25nPjMwL0dQLVNUVFRUPC9zdHJvbmc+PGJyIC8+DQoJKEdyYW50ZWQgYnkgRGVwYXJ0bWVudCBvZiBJbmZvcm1hdGlvbiBhbmQgQ29tbXVuaWNhdGlvbnMgb2YgSG8gQ2hpIE1pbmggY2l0eSwgMjNNYXIyMDE4KTwvc3Bhbj48YnIgLz4NCglTdW50b3J5IFBlcHNpQ28gVmlldG5hbSBCZXZlcmFnZTwvZGl2Pg0KPGRpdj4NCglBZGRyZXNzOiA1dGggRmxvb3IsIFNoZXJhdG9uIEhvdGVsLCA4OCBEb25nIEtob2kgU3RyZWV0LCBEaXN0cmljdCAxLCBIbyBDaGkgTWluaCBDaXR5LCBWaWV0bmFtLjwvZGl2Pg0KPGRpdj4NCglUZWw6ICg4NCAyOCkgMyA4MjEgOTQzNyZuYnNwOzwvZGl2Pg0KPGRpdj4NCglXZWJzaXRlOiB3d3cubWl6dWlrdS1lbXlldW51b2NzYWNoLnZuPGJyIC8+DQoJJm5ic3A7PC9kaXY+DQoNCiAgICA8ZGl2IGNsYXNzPSd0YWwgY21OYXZfZnQnPg0KICAgICAgICA8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0naHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL21penVpa3VlbXlldW51b2NzYWNoLycgdGl0bGU9J2ZhbnBhZ2UgZmFjZWJvb2snPjxzcGFuPkZvbGxvdyB1czwvc3Bhbj48aW1nIGFsdD0nZmInIHNyYz0nL2Nzcy9Db21tb24vZmIucG5nJyAvPjwvYT4NCiAgICAgICAgPGRpdiBjbGFzcz0nY2InPjwvZGl2Pg0KICAgIDwvZGl2PiANCjwvZGl2PiAgIA0KPGRpdiBjbGFzcz0ncmlnaHQnPiANCiAgICA8ZGl2PiANCiAgICAgICAgPGRpdiBjbGFzcz0nbGllbmtldCc+PHNwYW4gY2xhc3M9J2MwMDUyODYgZk9mZmljaW5hU2FuSVRDTWVkaXVtJz5XZWJzaXRlIExpbmsgPC9zcGFuPjxzZWxlY3Qgb25jaGFuZ2U9J25hdmlnYXRpb24odGhpcy52YWx1ZSk7Jz48b3B0aW9uIHZhbHVlPScnPkxpbms8L29wdGlvbj48b3B0aW9uIHZhbHVlPSdodHRwOi8vaG9pc2luaHZpZW4uY29tLnZuLyc+U3R1ZGVudCBVbmlvbiBvZiBWaWV0bmFtPC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0naHR0cDovL3d3dy50aGlldW5oaXZpZXRuYW0udm4vJz5DZW50cmFsIENvdW5jaWwgZm9yIEhvIENoaSBNaW5oIFlvdW5nIFBpb25lZXIgT3JnYW5pemF0aW9uPC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0naHR0cDovL3d3dy5zdW50b3J5LmNvbSc+U3VudG9yeSBIb2xkaW5ncyBMaW1pdGVkIDwvb3B0aW9uPjxvcHRpb24gdmFsdWU9J2h0dHA6Ly93d3cuc3VudG9yeS5jb20vY3NyL2FjdGl2aXR5L2Vudmlyb25tZW50L2Vjby9lZHVjYXRpb24vJz4gTWl6dWlrdSBQcm9ncmFtIGluIEphcGFuPC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0naHR0cDovL3d3dy5zdW50b3J5cGVwc2ljby52bi8nPlN1bnRvcnkgUGVwc2lDbyBWaWV0bmFtIEJldmVyYWdlPC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0naHR0cDovL3d3dy5saXZlbGVhcm4ub3JnLyc+Q2VudGVyIG9mIExpdmUgJiBMZWFybiBmb3IgRW52aXJvbm1lbnQgYW5kIENvbW11bml0eSA8L29wdGlvbj48b3B0aW9uIHZhbHVlPSdodHRwOi8vdHVvbmdsYWljZW50cmUub3JnLyc+VHVvbmcgTGFpIENlbnRyZSBmb3IgSGVhbHRoIEVkdWNhdGlvbiBhbmQgQ29tbXVuaXR5IERldmVsb3BtZW50ICA8L29wdGlvbj48L3NlbGVjdD48L2Rpdj4NCiAgICAgICAgPGRpdiBjbGFzcz0nY2InPjwvZGl2Pg0KICAgIDwvZGl2Pg0KICAgIDxwIGNsYXNzPSd0YXIgbGgyNCBmczE2Jz7CqSAyMDE3IEFsbCBSaWdodHMgUmVzZXJ2ZWQ8L3A+DQogICAgPHAgY2xhc3M9J3RhciBsaDI0IGZzMTYnPlN1bnRvcnkgUGVwc2lDbyBWaWV0bmFtIEJldmVyYWdlIENvbXBhbnkgTGltaXRlZDwvcD4NCiAgICA8cCBjbGFzcz0ndGFyIGxoMjQgZnMxNic+QWxsIGNvbnRlbnQgb24gdGhpcyBzaXRlIGlzIHNvbGVseSB0aGUgcHJvcGVydHkgb2Y8L3A+DQogICAgPHAgY2xhc3M9J3RhciBsaDI0IGZzMTYnPiJNaXp1aWt1LUkgbG92ZSBjbGVhbiB3YXRlciIgcHJvZ3JhbSBpbiBWaWV0bmFtPC9wPg0KICAgIDxwIGNsYXNzPSd0YXIgbGgyNCBmczE2Jz5BbGwgcmlnaHRzIHJlc2VydmVkPC9wPg0KICAgIDx1bCBpZD0nQ29tbW9uTWVudUJvdHRvbScgY2xhc3M9J21haW4nPjxsaT48YSBocmVmPSdodHRwOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2RpZXUta2hvYW4tc3UtZHVuZy5odG0nICB0aXRsZT0nVGVybXMgb2YgVXNlJz5UZXJtcyBvZiBVc2U8L2E+PC9saT48bGk+PGEgaHJlZj0nL2NoaW5oLXNhY2gtYmFvLW1hdC5odG0nICB0aXRsZT0nUHJpdmF0ZSBQb2xpY3knPlByaXZhdGUgUG9saWN5PC9hPjwvbGk+PC91bD4NCiAgICA8ZGl2IGNsYXNzPSdzb2xpZXUnPg0KICAgICAgICA8c3BhbiBjbGFzcz0nb25saW5lJz5PbmxpbmU6IDE8L3NwYW4+DQogICAgICAgIDxzcGFuIGNsYXNzPSd0b3RhbCc+VG90YWwgYWNjZXNzOiAzMDE8L3NwYW4+DQogICAgPC9kaXY+DQogICAgPGRpdiBjbGFzcz0nY2InPjwvZGl2Pg0KZAICDxYCHwBlZAIJD2QWGmYPD2QWAh4LcGxhY2Vob2xkZXIFFFTDqm4gxJHEg25nIG5o4bqtcCAqZAIBDw9kFgIfAgUHRW1haWwgKmQCAg8PZBYCHwIFDk3huq10IGto4bqpdSAqZAIDDw9kFgIfAgUPSOG7jSB2w6AgdMOqbiAqZAIEDxBkDxYEZgIBAgICAxYEEAUOR2nhu5tpIHTDrW5oICoFATBnEAUDTmFtBQExZxAFBE7hu68FATJnEAUFS2jDoWMFATNnZGQCBQ8PZBYCHwIFFFPhu5EgxJFp4buHbiB0aG/huqFpZAIGDxBkDxYDZgIBAgIWAxAFC0LhuqFuIGzDoCAqBQEwZxAFYkdpw6FvIHZpw6puIHRp4buDdSBo4buNYyAobuG6v3Uga2jDtG5nIHBo4bqjaSBsw6AgZ2nDoW8gdmnDqm4gdGnhu4N1IGjhu41jIHZ1aSBsw7JuZyBjaOG7jW4gS2jDoWMpBQExZxAFBUtow6FjBQEzZ2RkAgcPEGQPFgFmFgEQBRxDaOG7jW4gVOG7iW5oL1Row6BuaCBwaOG7kSAqBQEwZ2RkAggPEGQPFgFmFgEQBSFDaOG7jW4gUXXhuq1uL0h1eeG7h24vVGjhu4sgeMOjICoFATBnZGQCCQ8PZBYCHwIFEU7GoWkgY8O0bmcgdMOhYyAqZAIKDw9kFgIfAgUUVMOqbiDEkcSDbmcgbmjhuq1wICpkAgsPD2QWAh8CBQ5N4bqtdCBraOG6qXUgKmQCDA8PZBYCHwIFGk5o4bqtcCBlbWFpbCBj4bunYSBi4bqhbiAqZGQKbTqBLqjwxNq/NDcjtS/CZS8jvg==" />
    </div>

    <div>

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABW+B8zucBkmm7j7o8p9/mSE6rgEVJU9kkzw3scaUdD+NcUpmgEtOApajBptEzUnu9T2OjTxIRscqlH267VOX5p9hGtSZjKf6Jm+gwWMqgfLeGiVmgRoXHSNNeW/5gYRtxsexDJO0oW26rWOkxmaGvc4kyekug2I4Wbm8xLWzq7OBKkY5bFovdbzK/PomsF6S6bpXLQeVDWTAhKp1aQmVDobCW86AaiZS0qkzlfgch4APHwlDH7bnglcxS5Y+z1QBXHFhyypip9XfT0h6ioJC6Reh47AWpc1/BkRwt4T9NFkboy33Yh3YI8efRORFVn7HsBS9U1iMkcBAMfNi9FeVd3S6+XFM7i3hRPCXDv8RhXPV5Iu7vO0YdzQGtEdEe8bEHCUWzI1nogbGF+/GjKUYC8Q8gzSRlDsUqMMIbMks8ZUqZK9fCYLfdVwATMsYOPaK9whLX62o/CZPwBEZlKOb7usT5wdhA==" />
    </div>
@endsection
@section('content')

        <div id="container">
            <div id="contact">
                <div class="wrp">
                    <div class="contact">
                        <div class="contact-info">
                            <div class="fs20 pb8 fiCielCadena c109ce3">
                                {{ __('client.mizuiku-program')}}<span class="dnmobile">-</span> <span class="dbMobile">{{ __('client.i-love-clean-water')}}</span>
                            </div>
                            <ul>
                                <li style="line-height: normal;">
                                    <span class="fOfficinaSanITCBold">{{ __('client.contact-2')}}:&nbsp;</span>{{ __('client.contact-1')}}</li>
                                <li style="line-height: normal;">
                                    <span class="fOfficinaSanITCBold">{{ __('client.address-2')}}:</span>{{ __('client.address-1')}}</li>
                                <li style="line-height: normal;">
                                    <span class="fOfficinaSanITCBold">{{ __('client.tel')}}:&nbsp;</span>(84 28) 3 821 9437 (ext 242)</li>
                                <li style="line-height: normal;">
                                <span class="fOfficinaSanITCBold">Website:&nbsp;</span>{{ config('app.url') }}</li>
                            </ul>

                        </div>
                        <div class="contact-left">
                            <div id="contact_input" class="contact-input">
                                <div class="fs18 pb8 fiCielCadena c109ce3">{{ __('client.send-contact')}}</div>
                                <div class="ct-ip">
                                    <input id="tbName_CT" type="text" value="" class="ct-ipt required" placeholder="Name *" />
                                    <input id="tbPhone_CT" type="text" value="" class="ct-ipt required" placeholder="Phone *" />
                                    <input id="tbEmail_CT" type="text" value="" class="ct-ipt required" placeholder="Email *" />
                                    <select name="DisplayLoadControl$ctl00$Index$dllCT" id="DisplayLoadControl_ctl00_Index_dllCT" class="ct-sl dn">
                                        <option value="60">&quot;Mizuiku - I love clean water&quot; program</option>

                                    </select>
                                    <textarea id="tbContent_CT" class="ct-tare required" placeholder="Content *"></textarea>
                                    <div>
                                        <a href="javascript:;" title="" class="ct-btn" onclick="SendContact();">{{ __('client.send')}}</a>
                                        <a href="javascript:;" title="" class="ct-btn" onclick="ResetAllTextBox('#contact_input');">{{ __('client.content')}}</a>
                                        <div class="cb"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-right">
                            <div class="contact-input">
                                <div class="fs18 pb8 fiCielCadena c109ce3">
                                    {{ __('client.location')}}
                                </div>
                                <div class="mapborder">
                                    <div id="map_canvas2">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4676291444634!2d106.70168921526039!3d10.775451362157098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4802af4703%3A0x958af8c6972ad52c!2zS2jDoWNoIHPhuqFuIFNoZXJhdG9uIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1554104932439!5m2!1svi!2s" width="636" height="335" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="to-popup">
            <span id="btn-close"></span>
            <div id="popup-content">
                <div class="success">
                    <img src="{{ asset('client/css/Common/success.png') }}" class="db ma pb15" />
                    <p class="fs30 c109ce3 fOfficinaSanITCBold tac pb15">Gửi liên hệ thành công</p>
                    <div class="">
                        <p class="tac db lh22 c000 pb10 fs16">Cảm ơn bạn đã quan tâm và liên hệ đến chương trình</p>
                        <p class="tac db lh22 fs16">Chúng tôi sẽ liên hệ với bạn trong vòng 24h. Nếu bạn có bất cứ thắc mắc hay câu hỏi nào xin vui lòng gọi điện để được tư vấn miễn phí: <span class="cred">
                    (84 28) 3 821 9427 </span></p>
                    </div>
                    <a href="https://mizuiku-emyeunuocsach.vn/" title="home page" class="sc-hp">Trở về trang chủ</a>
                </div>
            </div>
            <!--end #popup-content-->
        </div>
        <!--to-popup end-->
        <div id="background-popup"></div>

        

@endsection

@section('custom-js')
<script type="text/javascript">
    function SendContact() {
        var obError = undefined;
        $("#contact_input .required").each(function() {
            if (obError == undefined && $(this).val() == '') {
                obError = $(this);
                return;
            }
        });
        if (obError != undefined) {
            alert("Bạn phải nhập đầy đủ thông tin trước khi gửi liên hệ!");
            obError.focus();
            return;
        }
        if (!CheckEmailValue($("#tbEmail_CT").val())) {
            $("#tbEmail_CT").focus();
            alert("Bạn đã nhập email    chưa chính xác, vui lòng nhập lại email.");
            return;
        }
        loading(true);
        var name = $("#tbName_CT").val();
        var email = $("#tbEmail_CT").val();
        var phone = $("#tbPhone_CT").val();
        var content = $("#tbContent_CT").val();
        // var igid = $("#DisplayLoadControl_ctl00_Index_dllCT option:selected").val();
        $.ajax({
            url: '/contact-us',
            type: "get",
            data: {
                "fullname": name,
                "email": email,
                "phone": phone,
                "content": content,
                "ip": '{{ \Request::ip() }}',
                "language": "{{ session()->get('locale') ? session()->get('locale') : 'en' }}"
            },
            success: function(res) {
                loading(false);
                ResetAllTextBox("#contact_input");
                loadPopup();
            },
            error: function(error) { //Lỗi xảy ra
                loading(false);
                alert('Hệ thống đang bận, bạn vui lòng thử lại sau.');
            }
        });
    };
    $("#btn-close").click(function() {
        disablePopup();
    });
    $(this).keydown(function(event) {
        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
            disablePopup(); // function close pop up
        }
    });
    $("#background-popup").click(function() {
        disablePopup(); // function close pop up 
    });
    var popupStatus = 0; // set value

    function loadPopup() {
        event.preventDefault();
        if (popupStatus === 0) { // if value is 0, show popup
            $("#to-popup").fadeIn(200); // fadein popup div
            $("#background-popup").css("opacity", "0.8"); // Css opacity, supports IE7, IE8
            $("#background-popup").fadeIn(200);
            popupStatus = 1; // and set value to 1
        }
    }

    function disablePopup() {
        if (popupStatus === 1) { // if value is 1, close popup
            $("#to-popup").fadeOut(300);
            $("#background-popup").fadeOut(300);
            popupStatus = 0;
        }
    }
</script>
@endsection