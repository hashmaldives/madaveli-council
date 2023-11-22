import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-gce-al-results-array', IndexField)
  app.component('detail-gce-al-results-array', DetailField)
  app.component('form-gce-al-results-array', FormField)
})
