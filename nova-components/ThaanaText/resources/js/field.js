import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-thaana-text', IndexField)
  app.component('detail-thaana-text', DetailField)
  app.component('form-thaana-text', FormField)
})
