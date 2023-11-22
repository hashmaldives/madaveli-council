import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-gce-ol-results-array', IndexField)
  app.component('detail-gce-ol-results-array', DetailField)
  app.component('form-gce-ol-results-array', FormField)
})
