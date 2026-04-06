import { motion } from "motion/react";
import { useState } from "react";
import { MapPin, Star, Navigation, Camera, Heart, Info } from "lucide-react";
import { ImageWithFallback } from "../components/figma/ImageWithFallback";

export function PointsOfInterest() {
  const [favorites, setFavorites] = useState<number[]>([]);

  const categories = [
    { id: "all", label: "Tous", color: "from-gray-400 to-gray-600" },
    { id: "monument", label: "Monuments", color: "from-blue-400 to-blue-600" },
    { id: "nature", label: "Nature", color: "from-green-400 to-green-600" },
    { id: "beach", label: "Plages", color: "from-cyan-400 to-cyan-600" },
  ];

  const [selectedCategory, setSelectedCategory] = useState("all");

  const places = [
    {
      id: 1,
      category: "monument",
      name: "Tour Eiffel",
      location: "Paris, France",
      description: "Monument emblématique de Paris offrant une vue panoramique époustouflante",
      image: "https://images.unsplash.com/photo-1720988583730-1191f37e5fcd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxlaWZmZWwlMjB0b3dlciUyMHBhcmlzJTIwbGFuZG1hcmt8ZW58MXx8fHwxNzc1MjIyODE2fDA&ixlib=rb-4.1.0&q=80&w=1080",
      rating: 4.9,
      reviews: "50K+ avis",
      distance: "2.5 km",
      tags: ["Historique", "Vue panoramique", "Photo"],
    },
    {
      id: 2,
      category: "monument",
      name: "Colisée de Rome",
      location: "Rome, Italie",
      description: "Amphithéâtre antique, symbole de l'Empire romain et merveille architecturale",
      image: "https://images.unsplash.com/photo-1679161058715-201f70bbb2f4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhbmNpZW50JTIwcm9tYW4lMjBjb2xvc3NldW18ZW58MXx8fHwxNzc1MjI0NDYzfDA&ixlib=rb-4.1.0&q=80&w=1080",
      rating: 4.8,
      reviews: "75K+ avis",
      distance: "5.2 km",
      tags: ["Antique", "Culture", "Architecture"],
    },
    {
      id: 3,
      category: "beach",
      name: "Plage Paradisiaque",
      location: "Maldives",
      description: "Plage de sable blanc et eaux cristallines, idéale pour la détente",
      image: "https://images.unsplash.com/photo-1714412192114-61dca8f15f68?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0cm9waWNhbCUyMGJlYWNoJTIwcGFyYWRpc2V8ZW58MXx8fHwxNzc1MTgwMjIwfDA&ixlib=rb-4.1.0&q=80&w=1080",
      rating: 5.0,
      reviews: "30K+ avis",
      distance: "8.0 km",
      tags: ["Plage", "Snorkeling", "Relaxation"],
    },
    {
      id: 4,
      category: "nature",
      name: "Sentier de Montagne",
      location: "Alpes Suisses",
      description: "Randonnée spectaculaire avec vues imprenables sur les sommets alpins",
      image: "https://images.unsplash.com/photo-1603475429038-44361bcde123?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb3VudGFpbiUyMGhpa2luZyUyMHRyYWlsfGVufDF8fHx8MTc3NTEzMjc0M3ww&ixlib=rb-4.1.0&q=80&w=1080",
      rating: 4.7,
      reviews: "20K+ avis",
      distance: "12.5 km",
      tags: ["Randonnée", "Nature", "Aventure"],
    },
  ];

  const filteredPlaces = selectedCategory === "all" 
    ? places 
    : places.filter(p => p.category === selectedCategory);

  const toggleFavorite = (id: number) => {
    setFavorites(prev => 
      prev.includes(id) ? prev.filter(fav => fav !== id) : [...prev, id]
    );
  };

  return (
    <div className="container mx-auto px-6 py-12">
      {/* Header */}
      <motion.div
        initial={{ opacity: 0, y: -20 }}
        animate={{ opacity: 1, y: 0 }}
        className="mb-12"
      >
        <h1 className="text-5xl font-bold text-white mb-4 drop-shadow-lg">
          Points d'Intérêt
        </h1>
        <p className="text-xl text-white/90 drop-shadow-md">
          Explorez les attractions et lieux emblématiques du monde entier
        </p>
      </motion.div>

      {/* Category Filter */}
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ delay: 0.2 }}
        className="mb-8 flex flex-wrap gap-3"
      >
        {categories.map((category, index) => {
          const isActive = selectedCategory === category.id;
          
          return (
            <motion.button
              key={category.id}
              initial={{ opacity: 0, scale: 0 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 0.1 * index, type: "spring" }}
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              onClick={() => setSelectedCategory(category.id)}
              className={`px-6 py-3 rounded-2xl font-semibold shadow-lg transition-all ${
                isActive
                  ? `bg-gradient-to-r ${category.color} text-white`
                  : "bg-white/90 backdrop-blur-md text-gray-700 hover:bg-white"
              }`}
            >
              {category.label}
            </motion.button>
          );
        })}
      </motion.div>

      {/* Places Grid */}
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {filteredPlaces.map((place, index) => {
          const isFavorite = favorites.includes(place.id);
          
          return (
            <motion.div
              key={place.id}
              initial={{ opacity: 0, y: 50 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: 0.1 * index }}
              whileHover={{ scale: 1.02, y: -5 }}
              className="group bg-white/90 backdrop-blur-md rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all"
            >
              {/* Image */}
              <div className="relative h-72 overflow-hidden">
                <motion.div
                  whileHover={{ scale: 1.1 }}
                  transition={{ duration: 0.6 }}
                  className="w-full h-full"
                >
                  <ImageWithFallback
                    src={place.image}
                    alt={place.name}
                    className="w-full h-full object-cover"
                  />
                </motion.div>
                
                {/* Gradient Overlay */}
                <div className="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent" />
                
                {/* Favorite Button */}
                <motion.button
                  whileHover={{ scale: 1.1 }}
                  whileTap={{ scale: 0.9 }}
                  onClick={() => toggleFavorite(place.id)}
                  className="absolute top-4 right-4 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-lg z-10"
                >
                  <Heart 
                    className={`w-6 h-6 transition-all ${
                      isFavorite ? "fill-red-500 text-red-500" : "text-gray-600"
                    }`}
                  />
                </motion.button>

                {/* Rating Badge */}
                <div className="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-2 rounded-full flex items-center gap-2">
                  <Star className="w-5 h-5 fill-yellow-400 text-yellow-400" />
                  <span className="font-bold text-gray-800">{place.rating}</span>
                </div>

                {/* Location on Image */}
                <div className="absolute bottom-4 left-4 right-4">
                  <div className="flex items-center gap-2 text-white">
                    <MapPin className="w-5 h-5" />
                    <span className="font-semibold text-lg">{place.location}</span>
                  </div>
                </div>
              </div>

              {/* Content */}
              <div className="p-6">
                <h3 className="text-2xl font-bold text-gray-800 mb-2">
                  {place.name}
                </h3>
                
                <p className="text-gray-600 mb-4">
                  {place.description}
                </p>

                {/* Tags */}
                <div className="flex flex-wrap gap-2 mb-4">
                  {place.tags.map((tag) => (
                    <span
                      key={tag}
                      className="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold"
                    >
                      {tag}
                    </span>
                  ))}
                </div>

                {/* Stats */}
                <div className="flex items-center gap-6 mb-4 text-sm text-gray-600">
                  <div className="flex items-center gap-2">
                    <Camera className="w-4 h-4" />
                    <span>{place.reviews}</span>
                  </div>
                  <div className="flex items-center gap-2">
                    <Navigation className="w-4 h-4" />
                    <span>{place.distance}</span>
                  </div>
                </div>

                {/* Actions */}
                <div className="flex gap-3 pt-4 border-t border-gray-200">
                  <motion.button
                    whileHover={{ scale: 1.05 }}
                    whileTap={{ scale: 0.95 }}
                    className="flex-1 px-4 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl font-semibold shadow-lg flex items-center justify-center gap-2"
                  >
                    <Navigation className="w-5 h-5" />
                    <span>Itinéraire</span>
                  </motion.button>
                  
                  <motion.button
                    whileHover={{ scale: 1.05 }}
                    whileTap={{ scale: 0.95 }}
                    className="px-4 py-3 bg-gray-200 text-gray-700 rounded-xl font-semibold hover:bg-gray-300 transition-colors"
                  >
                    <Info className="w-5 h-5" />
                  </motion.button>
                </div>
              </div>
            </motion.div>
          );
        })}
      </div>

      {/* Floating Map Icon */}
      <motion.div
        className="fixed bottom-8 right-8"
        initial={{ scale: 0, rotate: -180 }}
        animate={{ scale: 1, rotate: 0 }}
        transition={{ delay: 0.8, type: "spring" }}
      >
        <motion.div
          animate={{ 
            y: [0, -10, 0],
            scale: [1, 1.1, 1],
          }}
          transition={{ duration: 2, repeat: Infinity }}
          className="bg-gradient-to-r from-green-500 to-emerald-600 p-4 rounded-full shadow-2xl cursor-pointer"
        >
          <MapPin className="w-8 h-8 text-white" />
        </motion.div>
      </motion.div>

      {/* Stats Bar */}
      <motion.div
        initial={{ opacity: 0, y: 50 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ delay: 1 }}
        className="mt-12 bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl"
      >
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
          <div>
            <motion.div
              animate={{ scale: [1, 1.1, 1] }}
              transition={{ duration: 2, repeat: Infinity }}
              className="text-4xl font-bold text-blue-600 mb-2"
            >
              500+
            </motion.div>
            <div className="text-gray-600">Points d'intérêt</div>
          </div>
          
          <div>
            <motion.div
              animate={{ scale: [1, 1.1, 1] }}
              transition={{ duration: 2, repeat: Infinity, delay: 0.3 }}
              className="text-4xl font-bold text-green-600 mb-2"
            >
              {favorites.length}
            </motion.div>
            <div className="text-gray-600">Favoris</div>
          </div>
          
          <div>
            <motion.div
              animate={{ scale: [1, 1.1, 1] }}
              transition={{ duration: 2, repeat: Infinity, delay: 0.6 }}
              className="text-4xl font-bold text-purple-600 mb-2"
            >
              150+
            </motion.div>
            <div className="text-gray-600">Pays</div>
          </div>
        </div>
      </motion.div>
    </div>
  );
}
